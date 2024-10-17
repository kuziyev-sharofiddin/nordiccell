@extends('nordiccell.layouts.app')
@section( 'title', 'Dashboard')
@section('content')
<div class="content-wrapper">

    <div class="post-header">

        <header class="hero hero--size-large hero--align-left">


            <div class="hero__text-wrap ">

                <h1 class="hero__title">Welcome to Invitrotech</h1>
            </div>
        </header>
    </div>

    <div class="post-content">
        <div class="gform_wrapper">

            <h3>If you are new to our webshop, please register below, and we will get back to you as soon as possible.</h3>

            <div class="form-block">
                <form action="{{ route('register.store') }}" method="post">
                    @csrf
                    <div class="form-row column">
                        <label>Name of the Customer<span class="gfield_required">*</span></label>
                        <input placeholder="Name of the Customer" type="text" class="form-control" name="customer_name" value="">
                    </div>
                    <div class="form-row column">
                        <label>Street address or PO box<span class="gfield_required">*</span></label>
                        <input placeholder="Street address or PO box:" type="text" class="form-control" name="street_address" value="">
                    </div>
                    <div class="form-row column">
                        <label>Postal code & City<span class="gfield_required">*</span></label>
                        <input placeholder="Postal code & City:" type="text" class="form-control" name="postal_code" value="">
                    </div>
                    <div class="form-row column">
                        <label>Country<span class="gfield_required">*</span></label>
                        <input placeholder="Country" type="text" class="form-control" name="country" value="">
                    </div>
                    <div class="form-row column">
                        <label>VAT No<span class="gfield_required">*</span></label>
                        <input placeholder="VAT No" type="text" class="form-control" name="vat_number" value="">
                    </div>
                    <div class="form-row column">
                        <label>Company reg number<span class="gfield_required">*</span></label>
                        <input placeholder="Company reg number:" type="text" class="form-control" name="company_number" value="">
                    </div>
                    <div class="form-row">
                        <label>Phone<span class="gfield_required">*</span></label>
                        <input placeholder="Your phone number" type="tel" class="form-control" name="phone" value="">
                    </div>
                    <div class="form-row column">
                        <label>Fax<span class="gfield_required">*</span></label>
                        <input placeholder="Fax" type="text" class="form-control" name="fax" value="">
                    </div>
                    <div class="form-row column">
                        <label>Contact Person<span class="gfield_required">*</span></label>
                        <input placeholder="Contact Person" type="text" class="form-control" name="contact_person" value="">
                    </div>
                    <div class="form-row column">
                        <label>Name of Director<span class="gfield_required">*</span></label>
                        <input placeholder="Name of the Director" type="text" class="form-control" name="director_name" value="">
                    </div>
                    <div class="form-row column">
                        <label>Contact person at accounting<span class="gfield_required">*</span></label>
                        <input placeholder="Contact person at accounting" type="text" class="form-control" name="contact_person_at_account" value="">
                    </div>
                    <div class="form-row">
                        <label>E-mail to accounting<span class="gfield_required">*</span></label>
                        <input placeholder="E-mail to accounting" type="email" class="form-control" name="email_to_account" value="">
                    </div>
                    <div class="form-row">
                        <label>Phone to account<span class="gfield_required">*</span></label>
                        <input placeholder="Your phone number" type="tel" class="form-control" name="phone_to_account" value="">
                    </div>
                    <div class="form-row">
                        <label>Email<span class="gfield_required">*</span></label>
                        <input placeholder="Your email address" type="email" class="form-control" name="email" value="">
                    </div>
                    <div class="form-row">
                        <label>Password (can be updated later)<span class="gfield_required">*</span></label>
                        <input placeholder="Define password" type="password" class="form-control" name="password">
                    </div>
                    <div class="form-row">
                        <label>Confirm password<span class="gfield_required">*</span></label>
                        <input placeholder="Confirm password" type="password" class="form-control" name="confirm_password">
                    </div>
{{--                    <div class="form-row">--}}
{{--                        <script src="/recaptcha/api.js" async defer></script>--}}
{{--                        <div class="g-recaptcha" data-sitekey="6LfGDAApAAAAAMcXMnDCP2Z4Sqtex3hIBGjetr8P"></div>--}}
{{--                    </div>--}}
                    <input type="submit" class="cta gform_button" value="Register">
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
