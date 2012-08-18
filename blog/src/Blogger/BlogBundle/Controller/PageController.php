<?php 
namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blogger\BlogBundle\Entity\Enquiry;
use Blogger\BlogBundle\Form\EnquiryType;

class PageController extends Controller{
	
	public function indexAction(){
		
		return $this->render('BloggerBlogBundle:Page:index.html.twig');
		
	}
	
	public function nosotrosAction(){
		
		return $this->render('BloggerBlogBundle:Page:nosotros.html.twig');
		
	}
	
	public function contactoAction(){
			
		$enquiry = new Enquiry();
		$form = $this->createForm(new EnquiryType(), $enquiry);
		
		$request = $this->getRequest();
		if($request->getMethod() == 'POST'){
			$form->bindRequest($request);
			
			if($form->isValid()){
				$message = \Swift_Message::newInstance()
		            ->setSubject('Contact enquiry from symblog')
		            ->setFrom('enquiries@symblog.co.uk')
		            ->setTo($this->container->getParameter('blogger_blog.emails.contact_email'))
		            ->setBody($this->renderView('BloggerBlogBundle:Page:contactEmail.txt.twig', array('enquiry' => $enquiry)));
		        $this->get('mailer')->send($message);

        		$this->get('session')->setFlash('blogger-notice', 'Your contact enquiry was successfully sent. Thank you!');
				//Redirige / esto es importante para prevenir al usuario
				//reenvie el formulario si actualiza la pagina
				
				return $this->redirect($this->generateUrl('BloggerBlogBundle_contacto'));
			}
		}		
		
		return $this->render('BloggerBlogBundle:Page:contacto.html.twig', array(
			'form' => $form->createView()
		));
	}
}

?>
