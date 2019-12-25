@extends('master')
@section('title', 'Contact Us')
@section('content')
    <!-- navigation -->
    @include('navigation')
    <!-- end navigation -->
    <!-- slider -->
    <!-- contact section -->
    <section id="contact" class="wow fadeIn border-top border-bottom border-transperent-white-light animated"
             style="visibility: visible; animation-name: fadeIn;">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-md-12 col-sm-12 text-center">
                <span
                    class="alt-font text-uppercase title-extra-large deep-orange-text letter-spacing-1 font-weight-600">Shoxab</span>
                    <span
                        class="text-large letter-spacing-1 margin-one display-block text-uppercase light-gray-text alt-font">Get in touch with us</span>
                </div>
                <!-- end section title -->
            </div>
            <!-- text -->
            <div class="row margin-thirteen no-margin-lr no-margin-bottom">
                <div class="col-md-9 text-center center-col">
                    <div class="col-md-4 col-sm-4 text-center xs-margin-twenty-three xs-no-margin-lr xs-no-margin-top">
                        <i class="icon-phone icon-medium medium-gray-text no-margin-bottom"></i>
                        <span
                            class="text-uppercase display-block alt-font margin-one no-margin-lr medium-gray-text no-margin-bottom">Call us at</span>
                        <h6 class="text-medium alt-font medium-gray-text letter-spacing-1 no-margin-top">
                            123-456-7890</h6>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center xs-margin-twenty-three xs-no-margin-lr xs-no-margin-top">
                        <i class="icon-map-pin icon-medium medium-gray-text no-margin-bottom"></i>
                        <h6 class="text-medium alt-font letter-spacing-1 text-transform-none medium-gray-text">580
                            Pitner
                            Ave #2<br>Victoria, United States</h6>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <i class="icon-envelope icon-medium medium-gray-text no-margin-bottom"></i>
                        <span
                            class="text-uppercase display-block medium-gray-text alt-font margin-one no-margin-lr no-margin-bottom">Email us at</span>
                        <h6 class="text-medium alt-font letter-spacing-1 no-margin-top medium-gray-text text-transform-none">
                            <a href="mailto:sales@domain.com" class="medium-gray-text">sales@domain.com</a></h6>
                    </div>
                </div>
            </div>
            <!-- end text -->
            <div class="row">
                <!-- form -->
                <form id="travelcontactform" action="javascript:void(0)" method="post">
                    <div class="col-md-10 col-sm-12 center-col">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="wide-separator-line margin-twelve no-margin-lr bg-white-transparent"></div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div id="success" class="no-margin-lr" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- input -->
                            <input type="text" placeholder="YOUR NAME" name="name" id="name"
                                   class="medium-input-light alt-font">
                            <!-- end input -->
                            <!-- input -->
                            <input type="text" placeholder="YOUR EMAIL" name="email" id="email"
                                   class="medium-input-light alt-font">
                            <!-- end input -->
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- textarea -->
                            <textarea placeholder="YOUR MESSAGE" name="comment" id="comment"
                                      class="medium-input-light alt-font" style="height:122px"></textarea>
                            <!-- end textarea -->
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="col-md-6 col-sm-6 col-xs-12 no-padding-left"><span class="required">*Please complete all fields correctly</span>
                            </div>
                            <div
                                class="col-md-6 col-sm-6 col-xs-12 no-padding-right sm-text-right xs-no-padding-left xs-padding-eleven">
                                <input type="button" class="highlight-button-gray-border btn btn-small no-margin"
                                       value="send message" name="travel-contact-button" id="travel-contact-button">
                            </div>
                        </div>
                    </div>
                </form>
                <!-- end form -->
            </div>
        </div>
    </section>
    <!-- end contact section -->
    @include('footer')
@endsection
