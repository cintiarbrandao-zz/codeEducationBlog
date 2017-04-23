<?php
/**
 * Created by PhpStorm.
 * User: cintia
 * Date: 22/04/2017
 * Time: 23:27
 */

namespace App\Http\Controllers;


class BlogController extends Controller
{
    public function index()
    {
        $posts = [
            0 => [
              'titulo'=>'Titulo Post 1',
              'imagem'=>'http://placehold.it/240x150',
              'texto'=>'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo
               utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os
               embaralhou para fazer um livro de modelos de tipos.'
            ],
            1 => [
                'titulo'=>'Titulo Post 2',
                'imagem'=>'http://placehold.it/240x150',
                'texto'=>'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo
                 utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os
                 embaralhou para fazer um livro de modelos de tipos.'
            ],
            2 => [
                'titulo'=>'Titulo Post 3',
                'imagem'=>'http://placehold.it/240x150',
                'texto'=>'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo
                 utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os
                 embaralhou para fazer um livro de modelos de tipos.'
            ],
            3 => [
                'titulo'=>'Titulo Post 4',
                'imagem'=>'http://placehold.it/240x150',
                'texto'=>'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo
                    utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os
                    embaralhou para fazer um livro de modelos de tipos.'
            ],
        ];
        return view('blog.index', compact('posts'));
    }

    public function post()
    {
        return view('blog.post');
    }

    public function quemSou()
    {
        return view('blog.quem-sou');
    }

    public function contato()
    {
        return view('blog.contato');
    }
}