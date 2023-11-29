@extends('layout.app')

@section('contents')

@vite('public/navbar.css')
@vite('public/footer.css')
@vite('public/achievementpage.css')


    <header>
        <h1>MS Dhoni's Achievements</h1>
    </header>

    <section class="achievements">
        <div class="achievement-card">
            <img src="icc2011(1).jpg" alt="2011 World Cup Trophy">
            <h2>ICC Cricket World Cup 2011</h2>
            <p>MS Dhoni led the Indian cricket team to victory in the 2011 ICC Cricket World Cup, held in India.</p>
        </div>

        <div class="achievement-card">
            <img src="icc2007.jpg" alt="2007 T20 World Cup Trophy">
            <h2>ICC T20 World Cup 2007</h2>
            <p>Under Dhoni's captaincy, India won the inaugural ICC T20 World Cup in 2007 in South Africa.</p>
        </div>

        <div class="achievement-card">
            <img src="spritofcricket.jpg" alt="ICC Award For Sprit of Cricket">
            <h2>ICC Award For Sprit of Cricket in 2011</h2>
            <p>Dhoni was Awarded as the Sprit of Cricket in 2011 in Mumbai</p>
        </div>

        <!-- Add more achievement cards as needed -->
    </section>

    <section class="achievements">
        <div class="achievement-card">
            <img src="ipl.jpeg" alt="IPL Trophy">
            <h2>IPL Trophy</h2>
            <p>Under Dhoni's captaincy, Chennai Super Kings won the IPL Title in 2010, 2011, 2018, 2021, 2023</p>
        </div>

        <div class="achievement-card">
            <img src="iccmensaward.jpeg" alt="ICC Men's ODI Cricketer of the Year">
            <h2>ICC Men's ODI Cricketer of the Year</h2>
            <p>Mahendra Singh Dhoni won the ICC Men's ODI Cricketer of the Year in year 2008 and  2009</p>
        </div>

        <!-- Add more achievement cards as needed -->
    </section>

    @endsection
