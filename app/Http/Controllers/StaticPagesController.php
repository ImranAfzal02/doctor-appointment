<?php

namespace App\Http\Controllers;

class StaticPagesController extends Controller {
    public function index() {
        return view('pages.home');
    }

    public function breastScreening() {
        return view('pages.screening');
    }

    public function benignConditions() {
        return view('pages.benign');
    }

    public function ourTeam() {
        return view('pages.ourteam');
    }

    public function clinicContact() {
        return view('pages.cliniccontact');
    }

    public function breastCancerDiagnosis() {
        return view('pages.diagnosis');
    }

    public function breastCancerTreatment() {
        return view('pages.treatment');
    }

    public function oncoPlasticBreastSurgery() {
        return view('pages.surgery');
    }

    public function breastReconstruction() {
        return view('pages.reconstruction');
    }

    public function medicalTattooingScarTherapy() {
        return view('pages.scartherapy');
    }

    public function correctionBreastDeformity() {
        return view('pages.correction');
    }

    public function cosmeticBreastSurgery() {
        return view('pages.cosmeticsurgery');
    }

    public function oncologyConsultation() {
        return view('pages.consultation');
    }

    public function psychologySupport() {
        return view('pages.psychology');
    }

    public function locations() {
        return view('pages.locations');
    }

    public function meetOurTeam() {
        return view('pages.meetourteam');
    }
}
