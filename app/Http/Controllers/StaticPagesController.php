<?php

namespace App\Http\Controllers;

class StaticPagesController extends Controller {
    public function index() {
        return view('pages.home');
    }
    public function breastPhysician() {
        return view('pages.breastphysician');
    }

    public function clinicIntro() {
        return view('pages.clinicintro');
    }
    public function introRazia() {
        return view('pages.introdrrazia');
    }

    public function benignConditions() {
        return view('pages.benign');
    }

    public function consultationExpectation() {
        return view('pages.consultationexpectations');
    }

    public function lymphedema() {
        return view('pages.lymphedema');
    }

    public function selfAwareness() {
        return view('pages.selfawareness');
    }

    public function services() {
        return view('pages.services');
    }

    public function whatsappRedirect() {
        return view('pages.whatsapp_redirect');
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
