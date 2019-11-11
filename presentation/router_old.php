<?php

class router {



    public $contentFile = 'home.tpl';

    public function __construct() {

        if(isset($_GET['login'])) {
            $this->contentFile = 'login.tpl';
        }elseIf($_GET['phpInfo']){
            $this->contentFile = 'phpInfo.tpl';
        }elseif ($_GET['who_we_are']) {
            $this->contentFile = 'who_we_are.tpl';
        }elseif ($_GET['what_we_do']) {
            $this->contentFile = 'what_we_do.tpl';
        }elseif ($_GET['about']) {
            $this->contentFile= 'about.tpl';
        }elseif ($_GET['our_members']) {
            $this->contentFile= 'board_of_directors.tpl';
        }elseif ($_GET['school_colleges']) {
            $this->contentFile= 'school_colleges.tpl';
        }elseif ($_GET['scholarship']) {
            $this->contentFile= 'scholarship.tpl';
        }elseif ($_GET['mentoring']) {
            $this->contentFile= 'mentoring.tpl';
        }elseif ($_GET['secondcareers']) {
            $this->contentFile= 'second_careers.tpl';
        }elseif ($_GET['upcomingEvents']) {
            $this->contentFile= 'upcoming_events.tpl';

        }elseif ($_GET['wit_growth_summit_2019']) {
            $this->contentFile= 'wit_growth_summit_2019.tpl';}
        elseif ($_GET['events_awards_sponsorship']) {
            $this->contentFile= 'events_awards_sponsorship.tpl';
        }elseif ($_GET['past_events_awards']) {
            $this->contentFile= 'past_events_awards.tpl';
        }elseif ($_GET['witInMedia']) {
            $this->contentFile= 'witInMedia.tpl';
        }elseif ($_GET['blogs']) {
            $this->contentFile= 'blogs.tpl';
        }elseif ($_GET['viewsFromTheWorld']) {
            $this->contentFile= 'viewsFromTheWorld.tpl';
        }elseif ($_GET['witSponsors']) {
            $this->contentFile= 'witSponsors.tpl';
        }elseif ($_GET['did_you_know']) {
            $this->contentFile= 'did_you_know.tpl';
        }elseif ($_GET['members']) {
            $this->contentFile= 'members.tpl';
        }elseif ($_GET['contactUs']) {
            $this->contentFile= 'contactUs.tpl';
        }elseif ($_GET['menteeform']) {
            $this->contentFile= 'menteeform.tpl';
        }elseif ($_GET['mentorform']) {
            $this->contentFile= 'mentorform.tpl';
        }elseif ($_GET['menteeprofile']) {
            $this->contentFile= 'menteeprofile.tpl';
        }elseif ($_GET['mentorprofile']) {
            $this->contentFile= 'mentorprofile.tpl';
        }elseif ($_GET['mentorlist']) {
            $this->contentFile= 'mentorlist.tpl';
        }elseif ($_GET['menteelist']) {
            $this->contentFile= 'menteelist.tpl';
        }elseif ($_GET['events_and_rewards']) {
            $this->contentFile= 'events_and_rewards.tpl';
        }elseif ($_GET['news_and_insites']) {
            $this->contentFile= 'news_and_insites.tpl';
        }elseif ($_GET['wit_work_stream']) {
            $this->contentFile= 'wit_work_stream.tpl';
        }elseif ($_GET['past_specific_event']) {
            $this->contentFile= 'past_specific_event.tpl';
        }elseif ($_GET['past_specific_event1']) {
            $this->contentFile= 'past_specific_event1.tpl';
        }elseif ($_GET['past_specific_event2']) {
            $this->contentFile= 'past_specific_event2.tpl';
        }elseif ($_GET['past_specific_event3']) {
            $this->contentFile= 'past_specific_event3.tpl';
        }elseif ($_GET['past_events_awards_next']) {
            $this->contentFile= 'past_events_awards_next.tpl';
        }elseif ($_GET['job_portal']) {
            $this->contentFile= 'job_portal.tpl';
        }elseif ($_GET['job_title']) {
            $this->contentFile= 'job_title.tpl';
        }elseif ($_GET['activate']) {
            $this->contentFile= 'activate.tpl';
        }elseif ($_GET['forgotPass']) {
            $this->contentFile= 'forgot.tpl';
        }elseif ($_GET['reset_password']) {
            $this->contentFile= 'reset_password.tpl';  
        }elseif ($_GET['vipanan']) {
            $this->contentFile= 'vipanan_admin.tpl';
        }elseif ($_GET['add_new_company']) {
            $this->contentFile= 'add_new_company.tpl';
        }elseif ($_GET['company_edit_profile']) {
            $this->contentFile= 'company_edit_profile.tpl';
        }elseif ($_GET['wit']) {
            $this->contentFile='wit_admin_login.tpl';
        }elseif ($_GET['employer']) {
            $this->contentFile= 'company_login.tpl';    
        }elseIf ($_GET['userimageupload']){
            $this->contentFile = 'useruploadimg.tpl';
        }elseIf ($_GET['phpInfo']){
            $this->contentFile = 'resume_uploaded.tpl';
        }
        // elseIf ($_GET['delegate_registration']){
        //     $this->contentFile = 'deligate_registration_for_event.tpl';
        // }
        // elseIf ($_GET['witmasterclass']){
        //     $this->contentFile = 'witmasterclass.tpl';
        // }
        // elseIf ($_GET['witgrowthsummit2019_delegate_registration']){
        //     $this->contentFile = 'sponsor_deligate_registration.tpl';
        // }
        // elseIf ($_GET['sponsors_exhibitor']){
        //     $this->contentFile ='sponsorsexbitor.tpl';
        // }elseIf ($_GET['eventclassBooking']){
        //     $this->contentFile ='eventclass.tpl';
        // }
        //////////// employeer conditions //////

        if(logInStatus::isEmployeerLoggedIn()){
            if(isset($_GET['job_portal_dashboard'])) {
                $this->contentFile= 'job_portal_dashboard.tpl';
                }elseif ($_GET['job_application']) {
                    $this->contentFile= 'job_application.tpl';
                }elseif ($_GET['posted_job']) {
                    $this->contentFile= 'posted_job.tpl';
                }elseif ($_GET['post_jobs']) {
                    $this->contentFile= 'post_jobs.tpl';
                }elseif ($_GET['job_application_full_details']) {
                    $this->contentFile= 'job_application_full_details.tpl';
                }elseif ($_GET['editJob']) {
                    $this->contentFile= 'editJob.tpl';
                }elseif ($_GET['edit']){
                    $this->contentFile= 'company_profile.tpl';
                }elseif ($_GET['changepassword']){
                    $this->contentFile= 'company_changepassword.tpl';
                }
        }
        


        if(logInStatus::isWitLoggedIn()){
            if ($_GET['dashboard']) {
                $this->contentFile= 'wit_dashboard.tpl';
            }elseif ($_GET['wit_view_company_full_detail']) {
                $this->contentFile= 'wit_view_company_full_detail.tpl';
            }elseif ($_GET['applicant_profile']) {
                $this->contentFile = 'wit_view_specific_applicant_profile.tpl';
            }elseif ($_GET['job_full_detail']) {
                $this->contentFile = 'wit_view_specific_job_profile.tpl';
            }elseif ($_GET['job_applicants']) {
                $this->contentFile = 'wit_view_job_applicants_list.tpl';
            }
        }

        if(logInStatus::isVipananLoggedIn()){
            if ($_GET['vipanan_wit_dashboard']) {
                $this->contentFile= 'vipanan_wit_dashboard.tpl';
            }elseif ($_GET['job_full_detail']) {
                $this->contentFile = 'wit_view_specific_job_profile.tpl';
            }elseif ($_GET['vipanan_add_companies']) {
                $this->contentFile= 'vipanan_add_companies.tpl';
            }elseif ($_GET['vipanan_edit_company']) {
                $this->contentFile= 'vipanan_edit_company.tpl';
            }elseif ($_GET['vipanan_view_company_full_detail']) {
                $this->contentFile= 'vipanan_view_company_full_detail.tpl';
            }elseif ($_GET['vipanan_view_company_job_full_detail']) {
                $this->contentFile= 'vipanan_view_company_job_full_detail.tpl';
            }elseif ($_GET['vipanan_view_company_job_applicant_list']) {
                $this->contentFile= 'vipanan_view_company_job_applicant_list.tpl';
            }elseif ($_GET['candidate_profile']) {
                $this->contentFile = 'vipanan_view_specific_applicant_profile.tpl';
            }elseif ($_POST['removecompany']) {
                $this->contentFile = 'vipanan_wit_dashboard.tpl';
            }
        }
        
        if(logInStatus::isLoggedIn()){
            if($_GET['user_dashboard']){ 
                $this->contentFile= 'user_dashboard.tpl';
            }elseif ($_GET['user_view_profile']) {
                $this->contentFile= 'user_view_profile.tpl';
            }elseif ($_GET['applied_jobs']) {
                $this->contentFile= 'applied_jobs.tpl';
            }elseif ($_GET['user_edit_profile']) {
                $this->contentFile= 'user_edit_profile.tpl';
            }elseif ($_GET['job_details']) {
                $this->contentFile = 'user_applied_specific_job_detail.tpl';
            }elseif ($_GET['candidate_registration']) {
                $this->contentFile= 'candidate_registration.tpl';
            }elseif ($_GET['uploadResumeSite']) {
                $this->contentFile= 'resumeUploadSite.tpl';
            }elseif ($_GET['resumeUploadedSite']) {
                $this->contentFile= 'resume_uploaded_site.tpl';
            }elseif ($_GET['resumeUploaded']){
            $this->contentFile = 'resume_uploaded.tpl';
        }elseif ($_GET['uploadResume']) {
            $this->contentFile= 'resumeUpload.tpl';
        }
        }
          

    }



}

?>
