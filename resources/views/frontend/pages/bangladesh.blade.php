@extends('layouts.app-frontend')
@section('title', 'Bangladesh')
@section('web_content')
    <!-- Page Header Start -->

    <div class='pb-4'>
        <img class="w-100" src="{{ asset('public/frontend/img/Bangladesh.webp') }}" alt="">
    </div>
    <!-- Page Header End -->
    <!--About Two Start-->
    <section class="about-two">
        <div class="container">
            <div class="row">
                {{-- <div class="col-xl-6">
                    <div class="about-two__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-two__img">
                            <img src="{{ asset('public/frontend/assets/images/resources/about-image.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div> --}}
                <div class="col-xl-12">
                    <div class="about-two__right">
                        <div class="wrapper">
                            <div class="section-title_ text-left_">
                                <h2 class="section-title__title">Bangladesh</h2>
                            </div>
                            <p class="about-two__text-1 pb-3">Bangladesh, officially the People&#39;s Republic of
                                Bangladesh, is
                                a country in South Asia. It is the eighth-
                                most populous country in the world, with a population exceeding 165 million people in an
                                area of
                                either 148,460 square kilometres (57,320 sq mi) or 147,570 square kilometres (56,980 sq mi),
                                making it one of the most densely populated countries in the world. Bangladesh shares land
                                borders
                                with India to the west, north, and east, and Myanmar to the southeast; to the south it has a
                                coastline along the Bay of Bengal. It is narrowly separated from Bhutan and Nepal by the
                                Siliguri
                                Corridor; and from China by 100 km of the Indian state of Sikkim in the north. Dhaka, the
                                capital and
                                largest city, is the nation&#39;s economic, political, and cultural hub. Chittagong, the
                                largest seaport, is
                                the second-largest city. The official language is Bengali, one of the easternmost branches
                                of the
                                Indo-European language family.
                            </p>
                            <p class="about-two__text-1 pb-3">Bangladesh forms the sovereign part of the historic and
                                ethnolinguistic region of Bengal, which was
                                divided during the Partition of India in 1947. The country has a Bengali Muslim majority.
                                Ancient
                                Bengal was an important cultural centre in the Indian subcontinent as the home of the states
                                of
                                Vanga, Pundra, Gangaridai, Gauda, Samatata, and Harikela. The Mauryan, Gupta, Pala, Sena,
                                Chandra and Deva dynasties were the last pre-Islamic rulers of Bengal. The Muslim conquest
                                of
                                Bengal began in 1204 when Bakhtiar Khalji overran northern Bengal and invaded Tibet.
                                Becoming
                                part of the Delhi Sultanate, three city-states emerged in the 14th century with much of
                                eastern
                                Bengal being ruled from Sonargaon. Sufi missionary leaders like Sultan Balkhi, Shah Jalal
                                and Shah
                                Makhdum Rupos helped in spreading Muslim rule. The region was unified into an independent,
                                unitary Bengal Sultanate. Under Mughal rule, eastern Bengal continued to prosper as the
                                melting
                                pot of Muslims in the eastern subcontinent and attracted traders from around the world.
                                Mughal
                                Bengal became increasingly assertive and independent under the Nawabs of Bengal in the 18th
                                century. In 1757, the betrayal of Mir Jafar resulted in the defeat of Nawab Siraj-ud-Daulah
                                to the
                                British East India Company and eventual British dominance across South Asia. The Bengal
                                Presidency
                                grew into the largest administrative unit in British India. The creation of Eastern Bengal
                                and Assam in
                                1905 set a precedent for the emergence of Bangladesh. In 1940, the first Prime Minister of
                                Bengal
                                supported the Lahore Resolution with the hope of creating a state in eastern South Asia.
                                Prior to the
                                partition of Bengal, the Prime Minister of Bengal proposed a Bengali sovereign state. A
                                referendum
                                and the announcement of the Radcliffe Line established the present-day territorial boundary
                                of
                                Bangladesh.
                            </p>
                            <p class="about-two__text-1 pb-3">In 1947, East Bengal became the most populous province in the
                                Dominion of Pakistan. It was
                                renamed as East Pakistan with Dhaka becoming the country&#39;s legislative capital. The
                                Bengali
                                Language Movement in 1952; the East Bengali legislative election, 1954; the 1958 Pakistani
                                coup
                                d&#39;état; the Six point movement of 1966; and the 1970 Pakistani general election resulted
                                in the rise
                                of Bengali nationalism and pro-democracy movements in East Pakistan. The refusal of the
                                Pakistani
                                military junta to transfer power to the Awami League led by Sheikh Mujibur Rahman led to the
                                Bangladesh Liberation War in 1971, in which the Mukti Bahini aided by India waged a
                                successful
                                armed revolution. The conflict saw the 1971 Bangladesh genocide and the massacre of pro-
                                independence Bengali civilians, including intellectuals. The new state of Bangladesh became
                                the first
                                constitutionally secular state in South Asia in 1972. Islam was declared the state religion
                                in 1988. In
                                2010, the Bangladesh Supreme Court reaffirmed secular principles in the constitution.
                            </p>
                            <p class="about-two__text-1 pb-3">Bangladesh is a unitary parliamentary constitutional republic
                                based
                                on the Westminster system.
                                Bengalis make up 99% of the total population of Bangladesh, and the large Muslim population
                                of
                                Bangladesh makes it the third-largest Muslim-majority country. The country consists of eight
                                divisions, 64 districts and 495 subdistricts. It maintains third-largest military in South
                                Asia after India
                                and Pakistan;and has been a major contributor to UN peacekeeping operations. A middle power
                                in
                                the Indo-Pacific, Bangladesh is an emerging economy ranked as the 41st-largest in the world
                                by
                                nominal GDP, and the 30th-largest by PPP. It hosts one of the largest refugee populations in
                                the
                                world due to the Rohingya genocide. Bangladesh faces many challenges, including the adverse
                                effects of climate change, poverty, illiteracy,[28] corruption, demonstrations, and
                                authoritarianism.
                                However, the poverty rate has halved since 2011. Once a historic center of the muslin cloth
                                trade,
                                Bangladesh is now one of the world&#39;s largest modern garment exporters. Its economy has
                                constantly
                                been among the fastest growing economies in the 21st century.
                            </p>
                        </div>
                        <div class="section-title_ text-left_">
                            <h2 class="section-title__title text-center pt-4">Tourist attractions</h2>
                        </div>


                        <div class="container-fluid pt-4">
                            <div class="container">
                                @foreach ($torAttrData as $torData)
                                    <div class="torist_att_content_wrapper">
                                        <h2 class="section-title__title text-{{ $torData->img_position }} mb-2">
                                            {{ $torData->title ?? '' }}
                                        </h2>
                                        <div class="row">
                                            @if ($torData->img_position == 'left')
                                                <div class="col-lg-6 pb-4">
                                                    <p class="line_clamp">{!! $torData->content ?? '' !!}</p>
                                                    <a href="{{ route('view_details_to_att', $torData->id) }}">More
                                                        details</a>
                                                </div>
                                                <div class="col-lg-6 pb-4" style="min-height: 400px;">
                                                    <div class="position-relative torist_att_image rounded overflow-hidden">
                                                        <img class="position-absolute w-100 h-100"
                                                            src="{{ url('public/content_img/tourist_attrations/' . $torData->image) }}"
                                                            style="object-fit: cover;">
                                                    </div>
                                                </div>
                                            @else
                                                <div class="col-lg-6 pb-4" style="min-height: 400px;">
                                                    <div class="position-relative torist_att_image rounded overflow-hidden">
                                                        <img class="position-absolute w-100 h-100"
                                                            src="{{ url('public/content_img/tourist_attrations/' . $torData->image) }}"
                                                            style="object-fit: cover;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 pb-4">
                                                    <p class="line_clamp">{!! $torData->content ?? '' !!}</p>
                                                    <a href="{{ route('view_details_to_att', $torData->id) }}">More
                                                        details</a>
                                                </div>
                                            @endif


                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                    </div>




                </div>
            </div>
        </div>
    </section>

@endsection
