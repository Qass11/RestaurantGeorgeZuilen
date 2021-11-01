@extends('layouts.app')
@section('pagename', 'Home')

@section('content')
    <div class="container border-bottom about-us text-center">
        <div class="row">
            <div class="col-12 col-md-6 mb-3">
                <img src="{{ asset('images/privacy.jpg') }}" class="img-fluid" alt="Description about image">
                <h2>Our Start.</h2>
                <p>
                    This is the Privacy Policy of UMH Group (hereinafter referred to as "UMH Group," "we," "us" or "our"), a company having its address at Spaklerweg 10B, 1096BA, Amsterdam. UMH Group is registered in different companies with the Chamber. Our Privacy Policy explains how we collect, use, share and protect information in relation to our website george.amsterdam. We collect this information when you visit our website with your computer, tablet or mobile phone (“Computer”). We process personal data in a manner that is in accordance with the General Data Protection Regulation (the “GDPR”), the GDPR-based legislation and the other current privacy legislation.
                </p>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <img src="{{ asset('images/privacy.jpg') }}" class="img-fluid" alt="Description about image">
                <h2>Log file information</h2>
                <p>
                    We collect information that your browser sends whenever you visit our Service. This log file information may include information such as your computer's Internet Protocol address, browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages and other statistics.
                </p>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <img src="{{ asset('images/privacy.jpg') }}" class="img-fluid" alt="Description about image">
                <h2>Legal requests and preventing harm</h2>
                <p>
                    We may access, preserve and share your information in response to a legal request (like a search warrant, court order or subpoena) if we have a good faith belief that the law requires us to do so. We may also access, preserve and share information when we have a good faith belief it is necessary to: detect, prevent and address fraud and other illegal activity; to protect ourselves, you and others, including as part of investigations; and to prevent death or imminent bodily harm. Information we receive about you may be accessed, processed and retained for an extended period of time when it is the subject of a legal request or obligation, governmental investigation, or investigations concerning possible violations of our terms or policies, or otherwise to prevent harm.
                </p>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <img src="{{ asset('images/privacy.jpg') }}" class="img-fluid" alt="Description about image">
                <h2>Safety and security</h2>
                <p>
                    UMH Group has taken appropriate technical and organizational measures by using the latest technologies to protect your information against loss or unlawful processing. We use safeguards to help keep the information collected through the Service secure. However, UMH Group cannot ensure the security of any information you transmit to UMH Group or guarantee that information on the Service may not be accessed, disclosed, altered, or destroyed. We request you to do your part to help us. You are responsible for controlling access to emails between you and UMH Group, at all times. We are not responsible for the functionality, privacy, or security measures of any other organization.
                </p>
            </div>



            </div>
        </div>

    @endsection
