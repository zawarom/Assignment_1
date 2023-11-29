@extends('layout.app')

@section('contents')

@vite('public/navbar.css')
@vite('public/footer.css')
@vite('public/homepage.css')
    <header>
        <h1>Welcome to the MS Dhoni Fan Page</h1>
    </header>

    <section class="content">
        <img src="msd_image.jpg" height="400" width="300" alt="MS Dhoni" class="profile-image">
        <img src="msd_image1.jpg" height="400" width="300" alt="MS Dhoni" class="profile-image">
        <img src="msd_image2.jpg" height="400" width="300" alt="MS Dhoni" class="profile-image">
        <img src="msd_image3.jpg" height="400" width="300" alt="MS Dhoni" class="profile-image">
        <p>
            Mahendra Singh Dhoni, commonly known as MS Dhoni, is a former Indian cricketer and captain of the Indian national cricket team.
            He is considered one of the greatest cricketing captains of all time. Explore this fan page to learn more about his career and achievements.
            Mahendra Singh Dhoni (/məˈheɪndrə ˈsɪŋ dhæˈnɪ/ ⓘ; born 7 July 1981) is an Indian professional cricketer,
            who plays as a wicket-keeper-batsman. Widely regarded as one of the world's greatest wicket-keeper-batsmen
            and captains in the history of the sport,[a] he is known for his explosive batting, wicket-keeping and
            leadership skills.[9] He was the captain of the Indian national team in limited-overs formats from 2007 
            to 2017 and in Test cricket from 2008 to 2014. He plays for and captains Chennai Super Kings franchise in the Indian Premier League.
        </p>
    </section>

    
@endsection