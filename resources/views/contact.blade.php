@extends('layout.app')

@section('contents')

@vite('public/navbar.css')
@vite('public/footer.css')
@vite('public/contactpage.css')


    <header>
        <h1>MS Dhoni</h1>
        <p>Captain, Indian Cricket Team</p>
    </header>

    <section>
        <h2>Contact Information</h2>

        <div class="contact-info">
            <div>
                <h3>Email</h3>
                <p>msdhoni@example.com</p>
            </div>

            <div>
                <h3>Phone</h3>
                <p>+91 9876543210</p>
            </div>
        </div>

        <div class="social-media-links">
            <h3>Social Media</h3>
            <p>Follow MS Dhoni on <a href="https://twitter.com/msdhoni" target="_blank">Twitter</a>
                <a href="https://www.instagram.com/mahi7781/" target="_blank">Instagram</a>
                <a href="https://www.facebook.com/msdofficial" target="_blank">Facebook</a>.</p>
        </div>
    </section>

    @endsection