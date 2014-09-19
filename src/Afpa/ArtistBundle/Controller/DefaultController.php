<?php

namespace Afpa\ArtistBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Afpa\ArtistBundle\Entity\Artist;
// use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function voirAction($id)
    {
    	$url = 'https://api.spotify.com/v1/artists/'.$id;
    	$data = file_get_contents($url);
		$artist = json_decode($data, true);

        return $this->render('AfpaArtistBundle:Default:voir.html.twig', array('artist' => $artist));
    }

    public function saveAction($id)
    {
    	$url = 'https://api.spotify.com/v1/artists/'.$id;
    	$data = file_get_contents($url);
		$artist_array = json_decode($data, true);

		$artist = new Artist();

		$artist->setName($artist_array['name']);
		$artist->setPhoto($artist_array['images'][2]['url']);
		$artist->setExternalId($artist_array['id']);
		$artist->setGenres($artist_array['genres']);
		$artist->setPopularity($artist_array['popularity']);
		$artist->setExternalLink($artist_array['external_urls']['spotify']);


		$doctrine = $this->getDoctrine();
		$em = $doctrine->getManager();
		$em->persist($artist);

		$em->flush();

        return $this->redirect($this->generateUrl('afpa_artist_voir', array('id' => $id)));
    }
}