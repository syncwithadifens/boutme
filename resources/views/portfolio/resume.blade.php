@extends('layout.index')
@section('content')
    <article class="resume active" data-page="resume">

        <header>
            <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

            <div class="title-wrapper">
                <div class="icon-box">
                    <ion-icon name="book-outline"></ion-icon>
                </div>

                <h3 class="h3">Education</h3>
            </div>

            <ol class="timeline-list">

                @foreach ($data['education'] as $item)
                    <li class="timeline-item">

                        <h4 class="h4 timeline-item-title">{{ $item->name }}</h4>

                        <span>{{ $item->year }}</span>

                        <p class="timeline-text">
                            {{ $item->description }}
                        </p>

                    </li>
                @endforeach

                {{-- <li class="timeline-item">

                    <h4 class="h4 timeline-item-title">New york academy of art</h4>

                    <span>2006 — 2007</span>

                    <p class="timeline-text">
                        Ratione voluptatem sequi nesciunt, facere quisquams facere menda ossimus, omnis voluptas
                        assumenda est
                        omnis..
                    </p>

                </li>

                <li class="timeline-item">

                    <h4 class="h4 timeline-item-title">High school of art and design</h4>

                    <span>2002 — 2004</span>

                    <p class="timeline-text">
                        Duis aute irure dolor in reprehenderit in voluptate, quila voluptas mag odit aut fugit,
                        sed consequuntur
                        magni dolores
                        eos.
                    </p>

                </li> --}}

            </ol>

        </section>

        <section class="timeline">

            <div class="title-wrapper">
                <div class="icon-box">
                    <ion-icon name="book-outline"></ion-icon>
                </div>

                <h3 class="h3">Experience</h3>
            </div>

            <ol class="timeline-list">

                @foreach ($data['experience'] as $item)
                    <li class="timeline-item">

                        <h4 class="h4 timeline-item-title">{{ $item->name }}</h4>

                        <span>{{ $item->year }}</span>

                        <p class="timeline-text">
                            {{ $item->description }}
                        </p>

                    </li>
                @endforeach

                {{-- <li class="timeline-item">

                    <h4 class="h4 timeline-item-title">Art director</h4>

                    <span>2013 — 2015</span>

                    <p class="timeline-text">
                        Nemo enims ipsam voluptatem, blanditiis praesentium voluptum delenit atque corrupti,
                        quos dolores et
                        quas molestias
                        exceptur.
                    </p>

                </li>

                <li class="timeline-item">

                    <h4 class="h4 timeline-item-title">Web designer</h4>

                    <span>2010 — 2013</span>

                    <p class="timeline-text">
                        Nemo enims ipsam voluptatem, blanditiis praesentium voluptum delenit atque corrupti,
                        quos dolores et
                        quas molestias
                        exceptur.
                    </p>

                </li> --}}

            </ol>

        </section>

        <section class="skill">

            <h3 class="h3 skills-title">My skills</h3>

            <ul class="skills-list content-card">

                @foreach ($data['skill'] as $item)
                    <li class="skills-item">

                        <div class="title-wrapper">
                            <h5 class="h5">{{ $item->name }}</h5>
                            <data value="{{ $item->rate }}">{{ $item->rate }}%</data>
                        </div>

                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill" style="width: {{ $item->rate }}%;"></div>
                        </div>

                    </li>
                @endforeach

                {{-- <li class="skills-item">

                    <div class="title-wrapper">
                        <h5 class="h5">Graphic design</h5>
                        <data value="70">70%</data>
                    </div>

                    <div class="skill-progress-bg">
                        <div class="skill-progress-fill" style="width: 70%;"></div>
                    </div>

                </li>

                <li class="skills-item">

                    <div class="title-wrapper">
                        <h5 class="h5">Branding</h5>
                        <data value="90">90%</data>
                    </div>

                    <div class="skill-progress-bg">
                        <div class="skill-progress-fill" style="width: 90%;"></div>
                    </div>

                </li>

                <li class="skills-item">

                    <div class="title-wrapper">
                        <h5 class="h5">WordPress</h5>
                        <data value="50">50%</data>
                    </div>

                    <div class="skill-progress-bg">
                        <div class="skill-progress-fill" style="width: 50%;"></div>
                    </div>

                </li> --}}

            </ul>

        </section>

    </article>
@endsection
