<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArrayController extends AbstractController
{






    ////////////////

    #[Route('/array', name: 'app_array')]
    public function index(): Response
    {

        $songs = [
            [
                'title' => 'Thunderstruck',
                'artist' => "Rockin' Rebels",
                'country' => 'USA',
                'genre' => 'Rock',
                'year' => 1982,
            ],
            [
                'title' => 'Soulful Serenade',
                'artist' => 'The Groove Collective',
                'country' => 'Canada',
                'genre' => 'Soul',
                'year' => 1975,
            ],
            [
                'title' => 'Funky Junction',
                'artist' => 'The Funky Fusionists',
                'country' => 'UK',
                'genre' => 'Funk',
                'year' => 1988,
            ],
            [
                'title' => 'Melodic Bliss',
                'artist' => 'Harmony Harmonizers',
                'country' => 'Australia',
                'genre' => 'Classic Rock',
                'year' => 1970,
            ],
            [
                'title' => 'Rhythmic Reverie',
                'artist' => 'Soulful Strummers',
                'country' => 'USA',
                'genre' => 'Rock',
                'year' => 1995,
            ],
            [
                'title' => 'Groovy Groove',
                'artist' => 'Funkadelic Fusion',
                'country' => 'Canada',
                'genre' => 'Funk',
                'year' => 1978,
            ],
            [
                'title' => 'Heartstrings Harmony',
                'artist' => 'The Melodic Masters',
                'country' => 'UK',
                'genre' => 'Classic Rock',
                'year' => 1985,
            ],
            [
                'title' => 'Soulfire Symphony',
                'artist' => 'Soulful Sirens',
                'country' => 'USA',
                'genre' => 'Soul',
                'year' => 1967,
            ],
            [
                'title' => 'Electric Echo',
                'artist' => 'The Electric Emissaries',
                'country' => 'Australia',
                'genre' => 'Rock',
                'year' => 1973,
            ],
            [
                'title' => 'Funky Fiesta',
                'artist' => 'The Funky Fiesta Band',
                'country' => 'Canada',
                'genre' => 'Funk',
                'year' => 1980,
            ],
            [
                'title' => 'Classic Crescendo',
                'artist' => 'The Timeless Trio',
                'country' => 'UK',
                'genre' => 'Classic Rock',
                'year' => 1972,
            ],
            [
                'title' => 'Soulful Sunset',
                'artist' => 'Sunset Soul Singers',
                'country' => 'USA',
                'genre' => 'Soul',
                'year' => 1965,
            ],
            [
                'title' => 'Rock Rhapsody',
                'artist' => 'Rhapsodic Rockers',
                'country' => 'Australia',
                'genre' => 'Rock',
                'year' => 1987,
            ],
            [
                'title' => 'Funky Fusion',
                'artist' => 'The Funky Fusion Collective',
                'country' => 'Canada',
                'genre' => 'Funk',
                'year' => 1976,
            ],
            [
                'title' => 'Timeless Tunes',
                'artist' => 'The Time-Traveling Troubadours',
                'country' => 'UK',
                'genre' => 'Classic Rock',
                'year' => 1983,
            ],
            [
                'title' => 'Soulful Symphony',
                'artist' => 'Soul Symphony Orchestra',
                'country' => 'USA',
                'genre' => 'Soul',
                'year' => 1971,
            ],
            [
                'title' => 'Rockin\' Reflections',
                'artist' => 'Reflective Rock Revival',
                'country' => 'Australia',
                'genre' => 'Rock',
                'year' => 1969,
            ],
            [
                'title' => 'Funky Feelings',
                'artist' => 'The Feel-Good Funksters',
                'country' => 'Canada',
                'genre' => 'Funk',
                'year' => 1989,
            ],
            [
                'title' => 'Classic Grooves',
                'artist' => 'The Groovy Classics Ensemble',
                'country' => 'UK',
                'genre' => 'Classic Rock',
                'year' => 1977,
            ],
            [
                'title' => 'Soulful Stratosphere',
                'artist' => 'Stratospheric Soul Singers',
                'country' => 'USA',
                'genre' => 'Soul',
                'year' => 1981,
            ],
        ];



        return $this->render('array/index.html.twig', [
            'controller_name' => 'ArrayController',
            'imgPath' => '../../assets/placeholder.png',
            'songs' => $songs
        ]);
    }
}
