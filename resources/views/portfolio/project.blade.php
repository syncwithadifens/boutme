@extends('layout.index')
@section('content')
    <article class="portfolio active" data-page="portfolio">

        <header>
            <h2 class="h2 article-title">Project</h2>
        </header>

        <section class="projects">

            <ul class="filter-list">

                <li class="filter-item">
                    <button class="active" data-filter-btn>All</button>
                </li>

                @foreach ($data['project'] as $item)
                    <li class="filter-item">
                        <button data-filter-btn>{{ $item->categories->name }}</button>
                    </li>
                @endforeach
                {{-- 
                <li class="filter-item">
                    <button data-filter-btn>Applications</button>
                </li>

                <li class="filter-item">
                    <button data-filter-btn>Web development</button>
                </li> --}}

            </ul>

            <div class="filter-select-box">

                <button class="filter-select" data-select>

                    <div class="select-value" data-selecct-value>Select category</div>

                    <div class="select-icon">
                        <ion-icon name="chevron-down"></ion-icon>
                    </div>

                </button>

                <ul class="select-list">

                    {{-- <li class="select-item">
                        <button data-select-item>All</button>
                    </li> --}}

                    @foreach ($data['project'] as $item)
                        <li class="select-item">
                            <button data-select-item>{{ $item->categories->name }}</button>
                        </li>
                    @endforeach
                    {{-- 
                    <li class="select-item">
                        <button data-select-item>Applications</button>
                    </li>

                    <li class="select-item">
                        <button data-select-item>Web development</button>
                    </li> --}}

                </ul>

            </div>

            <ul class="project-list">

                @foreach ($data['project'] as $item)
                    <li class="project-item  active" data-filter-item data-category="web development">
                        <a href="#">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="./assets/images/{{ $item->img }}" alt="finance" loading="lazy">
                            </figure>

                            <h3 class="project-title">{{ $item->name }}</h3>

                            <p class="project-category">{{ $item->categories->name }}</p>

                        </a>
                    </li>
                @endforeach

                {{-- <li class="project-item  active" data-filter-item data-category="web development">
                    <a href="#">

                        <figure class="project-img">
                            <div class="project-item-icon-box">
                                <ion-icon name="eye-outline"></ion-icon>
                            </div>

                            <img src="./assets/images/project-2.png" alt="orizon" loading="lazy">
                        </figure>

                        <h3 class="project-title">Orizon</h3>

                        <p class="project-category">Web development</p>

                    </a>
                </li>

                <li class="project-item  active" data-filter-item data-category="web design">
                    <a href="#">

                        <figure class="project-img">
                            <div class="project-item-icon-box">
                                <ion-icon name="eye-outline"></ion-icon>
                            </div>

                            <img src="./assets/images/project-3.jpg" alt="fundo" loading="lazy">
                        </figure>

                        <h3 class="project-title">Fundo</h3>

                        <p class="project-category">Web design</p>

                    </a>
                </li>

                <li class="project-item  active" data-filter-item data-category="applications">
                    <a href="#">

                        <figure class="project-img">
                            <div class="project-item-icon-box">
                                <ion-icon name="eye-outline"></ion-icon>
                            </div>

                            <img src="./assets/images/project-4.png" alt="brawlhalla" loading="lazy">
                        </figure>

                        <h3 class="project-title">Brawlhalla</h3>

                        <p class="project-category">Applications</p>

                    </a>
                </li>

                <li class="project-item  active" data-filter-item data-category="web design">
                    <a href="#">

                        <figure class="project-img">
                            <div class="project-item-icon-box">
                                <ion-icon name="eye-outline"></ion-icon>
                            </div>

                            <img src="./assets/images/project-5.png" alt="dsm." loading="lazy">
                        </figure>

                        <h3 class="project-title">DSM.</h3>

                        <p class="project-category">Web design</p>

                    </a>
                </li>

                <li class="project-item  active" data-filter-item data-category="web design">
                    <a href="#">

                        <figure class="project-img">
                            <div class="project-item-icon-box">
                                <ion-icon name="eye-outline"></ion-icon>
                            </div>

                            <img src="./assets/images/project-6.png" alt="metaspark" loading="lazy">
                        </figure>

                        <h3 class="project-title">MetaSpark</h3>

                        <p class="project-category">Web design</p>

                    </a>
                </li>

                <li class="project-item  active" data-filter-item data-category="web development">
                    <a href="#">

                        <figure class="project-img">
                            <div class="project-item-icon-box">
                                <ion-icon name="eye-outline"></ion-icon>
                            </div>

                            <img src="./assets/images/project-7.png" alt="summary" loading="lazy">
                        </figure>

                        <h3 class="project-title">Summary</h3>

                        <p class="project-category">Web development</p>

                    </a>
                </li>

                <li class="project-item  active" data-filter-item data-category="applications">
                    <a href="#">

                        <figure class="project-img">
                            <div class="project-item-icon-box">
                                <ion-icon name="eye-outline"></ion-icon>
                            </div>

                            <img src="./assets/images/project-8.jpg" alt="task manager" loading="lazy">
                        </figure>

                        <h3 class="project-title">Task Manager</h3>

                        <p class="project-category">Applications</p>

                    </a>
                </li>

                <li class="project-item  active" data-filter-item data-category="web development">
                    <a href="#">

                        <figure class="project-img">
                            <div class="project-item-icon-box">
                                <ion-icon name="eye-outline"></ion-icon>
                            </div>

                            <img src="./assets/images/project-9.png" alt="arrival" loading="lazy">
                        </figure>

                        <h3 class="project-title">Arrival</h3>

                        <p class="project-category">Web development</p>

                    </a>
                </li> --}}

            </ul>

        </section>

    </article>
@endsection
