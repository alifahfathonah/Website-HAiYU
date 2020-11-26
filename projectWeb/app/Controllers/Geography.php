<?php

namespace App\Controllers;

class Geography extends BaseController
{
    private $course = 'Geography';
    private $mapel = 'geography';
    
    public function index(){
        return redirect()->to('/social/geography');
    }
    public function chapter1(){
        $data=[
            'course' => $this->course,
            'chapter' => 'Chapter 1',
            'materi' => 'Introduction',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.</p>
            <br>
            <p>Suspendisse ultricies consectetur sodales. Nunc vulputate, ipsum id fringilla semper, lorem nisi faucibus nisi, in commodo urna dolor in ligula. Ut vel sollicitudin odio, id porttitor ligula. Vestibulum pretium porta nisl, eget suscipit turpis. Nullam vitae nisl enim. Curabitur auctor, tortor fringilla laoreet convallis, felis ligula cursus mi, quis dignissim dolor enim non orci. Maecenas dictum justo massa, nec venenatis metus ullamcorper sit amet. Donec iaculis, lorem sed tristique porttitor, sem risus auctor velit, et facilisis dui mi eu magna. Vivamus feugiat diam orci, eu aliquam mi dapibus ut. Pellentesque rutrum vel ante nec dignissim.</p>
            <br>',
            'next' => '/'.$this->mapel.'/chapter2',
        ];
        return view('Page/Content',$data);
    }

    public function chapter2(){
        $data=[
            'course' => $this->course,
            'chapter' => 'Chapter 2',
            'materi' => 'Reading Maps',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.</p>
            <br>
            <p>Suspendisse ultricies consectetur sodales. Nunc vulputate, ipsum id fringilla semper, lorem nisi faucibus nisi, in commodo urna dolor in ligula. Ut vel sollicitudin odio, id porttitor ligula. Vestibulum pretium porta nisl, eget suscipit turpis. Nullam vitae nisl enim. Curabitur auctor, tortor fringilla laoreet convallis, felis ligula cursus mi, quis dignissim dolor enim non orci. Maecenas dictum justo massa, nec venenatis metus ullamcorper sit amet. Donec iaculis, lorem sed tristique porttitor, sem risus auctor velit, et facilisis dui mi eu magna. Vivamus feugiat diam orci, eu aliquam mi dapibus ut. Pellentesque rutrum vel ante nec dignissim.</p>
            <br>',
            'next' => '/'.$this->mapel.'/chapter3',
        ];
        return view('Page/Content',$data);
    }

    public function chapter3(){
        $data=[
            'course' => $this->course,
            'chapter' => 'Chapter 3',
            'materi' => 'Astronomy of the Earth',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.</p>
            <br>
            <p>Suspendisse ultricies consectetur sodales. Nunc vulputate, ipsum id fringilla semper, lorem nisi faucibus nisi, in commodo urna dolor in ligula. Ut vel sollicitudin odio, id porttitor ligula. Vestibulum pretium porta nisl, eget suscipit turpis. Nullam vitae nisl enim. Curabitur auctor, tortor fringilla laoreet convallis, felis ligula cursus mi, quis dignissim dolor enim non orci. Maecenas dictum justo massa, nec venenatis metus ullamcorper sit amet. Donec iaculis, lorem sed tristique porttitor, sem risus auctor velit, et facilisis dui mi eu magna. Vivamus feugiat diam orci, eu aliquam mi dapibus ut. Pellentesque rutrum vel ante nec dignissim.</p>
            <br>',
            'next' => '/'.$this->mapel.'/chapter4',
        ];
        return view('Page/Content',$data);
    }

    public function chapter4(){
        $data=[
            'course' => $this->course,
            'chapter' => 'Chapter 4',
            'materi' => 'Climatology & Meteorology',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.</p>
            <br>
            <p>Suspendisse ultricies consectetur sodales. Nunc vulputate, ipsum id fringilla semper, lorem nisi faucibus nisi, in commodo urna dolor in ligula. Ut vel sollicitudin odio, id porttitor ligula. Vestibulum pretium porta nisl, eget suscipit turpis. Nullam vitae nisl enim. Curabitur auctor, tortor fringilla laoreet convallis, felis ligula cursus mi, quis dignissim dolor enim non orci. Maecenas dictum justo massa, nec venenatis metus ullamcorper sit amet. Donec iaculis, lorem sed tristique porttitor, sem risus auctor velit, et facilisis dui mi eu magna. Vivamus feugiat diam orci, eu aliquam mi dapibus ut. Pellentesque rutrum vel ante nec dignissim.</p>
            <br>',
            'next' => '/'.$this->mapel.'/chapter5',
        ];
        return view('Page/Content',$data);
    }

    public function chapter5(){
        $data=[
            'course' => $this->course,
            'chapter' => 'Chapter 5',
            'materi' => 'Landforms & Geology',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.</p>
            <br>
            <p>Suspendisse ultricies consectetur sodales. Nunc vulputate, ipsum id fringilla semper, lorem nisi faucibus nisi, in commodo urna dolor in ligula. Ut vel sollicitudin odio, id porttitor ligula. Vestibulum pretium porta nisl, eget suscipit turpis. Nullam vitae nisl enim. Curabitur auctor, tortor fringilla laoreet convallis, felis ligula cursus mi, quis dignissim dolor enim non orci. Maecenas dictum justo massa, nec venenatis metus ullamcorper sit amet. Donec iaculis, lorem sed tristique porttitor, sem risus auctor velit, et facilisis dui mi eu magna. Vivamus feugiat diam orci, eu aliquam mi dapibus ut. Pellentesque rutrum vel ante nec dignissim.</p>
            <br>',
            'next' => '/'.$this->mapel.'/midtest',
        ];
        return view('Page/Content',$data);
    }
}