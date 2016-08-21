<?php

class AppController extends BaseController
{

    // HOME

    public function index() {
        return View::make("pages.home");
    }

    // ABOUT

    public function about() {
        return View::make("pages.about");
    }

    public function our_values() {
        return View::make("pages.about.our_values");
    }

    public function areas_we_cover() {
        return View::make("pages.about.areas_we_cover");
    }

    // SERVICES

    public function services() {
        return View::make("pages.services");
    }

    public function generix_clean() {
        return View::make("pages.services.generix_clean");
    }

    public function generix_care() {
        return View::make("pages.services.generix_care");
    }

    public function generix_care_plus() {
        return View::make("pages.services.generix_care_plus");
    }

    // QUALITY ASSURANCE

    public function quality_assurance() {
        return View::make("pages.quality_assurance");
    }

    public function regulations_recruitment() {
        return View::make("pages.quality_assurance.regulations_recruitment");
    }

    public function monitoring() {
        return View::make("pages.quality_assurance.monitoring");
    }

    public function workforce_development() {
        return View::make("pages.quality_assurance.workforce_development");
    }

    public function partnership() {
        return View::make("pages.quality_assurance.partnership");
    }

    // CONTACT

    public function contact() {
        return View::make("pages.contact");
    }

}
