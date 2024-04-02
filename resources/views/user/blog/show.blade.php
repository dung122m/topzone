@extends('user.layouts.master')
@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-12">
                    <h1 class="mb-3" style="font-size: 2em">Tin Tức
                    </h1>
                    <div class="blog">
                        <div class="">
                            <img src="{{ $posts->image }}" alt="" width="50%">
                        </div>
                        <div class="mt-2">
                            <h2>
                                {{ $posts->title }}
                            </h2>
                        </div>
                        <div class="mt-2">
                            {!! $posts->content !!}
                        </div>

                        <div class="mt-5">
                            Ngày viết: {{ $posts->created_at }}
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
