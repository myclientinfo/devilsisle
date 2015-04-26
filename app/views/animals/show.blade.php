@extends('layouts.scaffold')

@section('main')

<div id="content">

    <div class="block-main">

        <div class="container"> 

            <div class="row">
                <div class="span12">

                <ul class="breadcrumb">
                  <li><a href="/Animals/">All Animals</a> <span class="divider">/</span></li>
                  <li><a href="/Animals/{{{ $animal->category->slug }}}">{{{ $animal->category->name }}}</a> <span class="divider">/</span></li>
                  <li class="active">{{{ $animal->name }}}</li>
                </ul>

                <h3>{{{ $animal->name }}}</h3>
                </div>
            </div>

            <div class="row">

                <div class="span8">

                    {{ Markdown::render($animal->description) }}

                </div>

                <div class="span4">

                    <div id="details-panel" class="panel">

                        @if($animal->aka)
                        <div class="row">
                            <div class="span1"><b>Also</b></div>
                            <div class="span3">{{{ $animal->aka }}}</div>
                        </div>
                        @endif
                        <div class="row">
                            <div class="span1"><b>Species</b></div>
                            <div class="span3">{{{ $animal->species }}}</div>
                        </div>
                        <div class="row">
                            <div class="span1"><b>Category</b></div>
                            <div class="span3">{{{ $animal->category->name }}}</div>
                        </div>
                        <div class="row">
                            <div class="span1"><b>Scariness</b></div>
                            <div class="span3">
                                <div class="stat-bar" style="height: 10px;">
                                <?php for($i = 1; $i<=$animal->appearance;$i++){ ?>
                                <span class="bar<?=$i?>"></span>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span1"><b>Danger</b></div>
                            <div class="span3">
                                <div class="stat-bar" style="height: 10px;">
                                <?php for($i = 1; $i<=$animal->danger;$i++){ ?>
                                <span class="bar<?=$i?>"></span>
                                <?php } ?>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="span1"><b>Risk</b></div>
                            <div class="span3">
                                <div class="stat-bar" style="height: 10px;">
                                <?php for($i = 1; $i<=$animal->risk;$i++){ ?>
                                <span class="bar<?=$i?>"></span>
                                <?php } ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    @if(File::isDirectory(public_path().'/images/'.$animal->slug))

                    @foreach(File::files(public_path().'/images/'.$animal->slug) as $file)

                    <div class="profile_image_box">
                        <img src="{{asset(str_replace(public_path(), '', $file))}}" style="margin-bottom: 20px;">
                    </div>

                    @endforeach

                    @endif

                </div>

            </div>

        </div>

    </div>

</div>

@stop
