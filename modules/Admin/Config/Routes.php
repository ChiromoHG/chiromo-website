<?php

$routes->group('admin', ['namespace' => 'Modules\Admin\Controllers'], function($routes){
    $routes->get("auth/login", "Admin::login");
    $routes->get('auth/logout', 'ManageUsers::logout');
    $routes->post('auth/user-login', 'ManageUsers::loginUser');
});

//, 'filter' => 'isLoggedInFilter'

$routes->group('admin', ['namespace' => 'Modules\Admin\Controllers', 'filter' => 'isLoggedInFilter'], function($routes){
    $routes->get('dashboard', 'Admin::dashboard');
    $routes->get('dashboard/manage_users', 'ManageUsers::manageUsers');
    $routes->get('dashboard/manage_users/edit_user/(:segment)', 'ManageUsers::editUser/$1');
    $routes->get('dashboard/manage_users/edit_role/(:segment)', 'ManageUsers::editRole/$1');
    $routes->get('dashboard/manage_users/profile', 'ManageUsers::profile');
    $routes->get('dashboard/assessment_group', 'Assessments::assessmentGroup');
    $routes->get('dashboard/assessment_questions', 'Assessments::assessmentQuestions');
    $routes->get('dashboard/assessment_answers', 'Assessments::assessmentAnswers');
    $routes->get('dashboard/create_carousel', 'Web::createCarousel');
    $routes->get('dashboard/create_job', 'Jobs::createJob');
    $routes->get('dashboard/crete_offer', 'Web::createOffer');

    $routes->get('dashboard/time_slots', 'Admin::timeSlots');
    $routes->get('dashboard/appointments', 'Admin::appointments');
    $routes->get('dashboard/patients', 'Admin::patients');
    $routes->get('dashboard/appointment/(:segment)', 'Admin::appointment/$1');
    $routes->get('dashboard/patients/patient', 'Admin::patientsPatient');
    $routes->get('dashboard/patients/patient/history', 'Admin::patientHistory');
    $routes->get('dashboard/patients/patient/examination', 'Admin::patientExamination');
    $routes->get('dashboard/patients/patient/diagnosis', 'Admin::patientDiagnosis');
    $routes->get('dashboard/patients/patient/services', 'Admin::patientServices');
    $routes->get('dashboard/patients/patient/prescription', 'Admin::patientPrescription');
    $routes->get('dashboard/patients/patient/consultation', 'Admin::patientConsultation');
    $routes->get('dashboard/patients/patient/bill', 'Admin::patientBill');
    $routes->get('dashboard/patients/patient/referral', 'Admin::patientReferral');
    $routes->get('dashboard/patients/patient/checkout', 'Admin::patientCheckout');
    $routes->get('dashboard/master', 'Admin::master');
    $routes->get('dashboard/create_roles', 'Admin::createRoles');
    $routes->get('dashboard/departments', 'Admin::departments');
    $routes->get('dashboard/services', 'Services::services');
    $routes->post('service/create_service', 'Services::createService');
    $routes->get('service/get_all_services', 'Services::getAllServices');
    $routes->get('service/get_service_by_id', 'Services::getServiceById');

    //    ajax calls
    $routes->post('roles/create', 'ManageUsers::newRole');
    $routes->get('roles/getRoles', 'ManageUsers::getRoles');
    $routes->post('users/createUser', 'ManageUsers::createUser');
    $routes->get('users/getUsers', 'ManageUsers::getUsers');
    $routes->post('users/updateUser/(:segment)', 'ManageUsers::updateUser/$1');
    $routes->post('users/updateUserProfile/(:segment)', 'ManageUsers::updateUserProfile/$1');
    $routes->get('appointment/get-appointments', 'ManageDoctor::getAppointments');
    $routes->get('appointment/get-canceled-appointments', 'ManageDoctor::getCanceledAppointments');
    $routes->post('appointment/approve-appointment', 'ManageDoctor::approveAppointment');
    $routes->post('patients/get-patients', 'ManageDoctor::getPatients');
    $routes->post('assessment/create_assessment_category', 'Assessments::createAssessmentCategory');
    $routes->get('assessment/get_assessment_category', 'Assessments::getAssessmentCategory');
    $routes->get('assessment/get_assessment_category_by_id', 'Assessments::getAssessmentCategoryById');
    $routes->post('assessment/create_assessment_question', 'Assessments::createAssessmentQuestion');
    $routes->get('assessment/get_assessment_questions', 'Assessments::getAssessmentQuestions');
    $routes->get('assessment/get_assessment_questions_by_id', 'Assessments::getAssessmentQuestionsById');
    $routes->get('assessment/get_assessment_questions_category', 'Assessments::getAssessmentAnswersCategory');
    $routes->post('assessment/create_assessment_answers', 'Assessments::createAssessmentAnswers');
    $routes->get('assessment/get_assessment_answers', 'Assessments::getAssessmentAnswers');
    $routes->get('assessment/get_assessment_answers_with_quesId', 'Assessments::getAssessmentAnswersWithQuesId');
    $routes->post('assessment/update_assessment_answers_with_quesId', 'Assessments::updateAssessmentAnswersWithQuesId');
    $routes->get('department/get_all_departments', 'Departments::getAllDepartments');
    $routes->post('department/create_hospital_department', 'Departments::createDepartment');
    $routes->get('department/get_department_by_id', 'Departments::getDepartmentById');
    $routes->post('carousel/create_carousel', 'Web::saveCarousel');
    $routes->get('carousel/get_carousel', 'Web::getCarousel');
    $routes->get('jobs/get_jobs', 'Jobs::getJobs');
    $routes->post('jobs/save_job', 'Jobs::saveJob');
    $routes->post('offer/create_offer', 'Web::saveOffer');
    $routes->get('offer/get_offers', 'Web::getOffer');
    $routes->post('offer/delete_offer', 'Web::deleteOffer');
    $routes->post('offer/end_offer', 'Web::endOffer');
    $routes->post('offer/get_offers_id', 'Web::getOffersId');

    $routes->post('doctor/save-time-slots', 'ManageDoctor::timeSlot');
    $routes->get('doctor/get-time-slots', 'ManageDoctor::getTimeSlots');
});
