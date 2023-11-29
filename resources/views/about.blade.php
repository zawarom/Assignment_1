@extends('layout.app')

@section('contents')

@vite('public/navbar.css')
@vite('public/footer.css')
@vite('public/aboutpage.css')


    <header>
        <h1>About MS Dhoni</h1>
    </header>

    <section class="about-content">
        <img src="msd.jpg" alt="MS Dhoni" class="profile-image">
        <p class="content">
            Mahendra Singh Dhoni, commonly known as MS Dhoni, is a former Indian cricketer and one of the most successful captains in the history of Indian cricket.
            Born on July 7, 1981, in Ranchi, Jharkhand, Dhoni is renowned for his calm demeanor on the field, exceptional leadership skills, and finishing prowess as a batsman.
        </p>
        <p class="content">
            Dhoni made his debut for the Indian cricket team in December 2004 and quickly rose through the ranks to become the captain of the limited-overs formats.
            Under his captaincy, India achieved numerous milestones, including winning the ICC T20 World Cup in 2007 and the ICC Cricket World Cup in 2011.
        </p>
        <p class="content">
            Apart from his achievements as a captain, Dhoni is known for his lightning-quick stumping behind the stumps, guiding the team to victory in high-pressure situations, and his iconic helicopter shot.
        </p>
    </section>

    @endsection