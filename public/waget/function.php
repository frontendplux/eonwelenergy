<?php
  function curousol($data){
   foreach ($data['curousol'] as $value) {
      $title=$value['title'];
      $image=$value['image'];
      $header=$value['header'];
      $description=$value['description'];
   echo 
   <<<_end
   <div class="owl-carousel-item position-relative">
         <img class="img-fluid" src="asset/img/$image" alt="">
         <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .4);">
            <div class="container">
               <div class="row justify-content-start">
                     <div class="col-10 col-lg-8">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">$title</h5>
                        <h1 class="display-3 text-white animated slideInDown mb-4">$header</h1>
                        <p class="fs-5 fw-medium text-white mb-4 pb-2">$description</p>
                        <a href="about" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                        <a href="contact" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                     </div>
               </div>
            </div>
         </div>
   </div>
   _end;
   }
  }

//   ---------------service_header

function service_header($data){
   $eradonal=2;
   foreach ($data['header-severces-image-title'] as $value) {
       $alt=$value['alt'];
       $image=$value['image'];
       $title=$value['title'];
   echo 
   <<<_end
           <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.$eradonal s">
               <div class="overflow-hidden">
                   <img class="img-fluid w-100 h-100" src="asset/img/$image" alt="$alt">
               </div>
               <div class="d-flex align-items-center justify-content-between bg-light p-4">
                   <h5 class="text-truncate me-3 mb-0">$title</h5>
                   <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i class="fa fa-arrow-right"></i></a>
               </div>
           </div>
   _end;
   $eradonal= +2;
   }
   
}

// --------technicians
function technicians($data){
   $eradonal=1;
                    foreach ($data['technicians'] as $value) {
                        $fullname=$value['fullname'];
                        $job=$value['job'];
                        $image=$value['image'];
                        $facebook=$value['social-handle']['facebook'];
                        $twitter=$value['social-handle']['twitter'];
                        $instagram=$value['social-handle']['instagram'];
                    echo 
                    <<<_end
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{$eradonal}s">
                            <div class="team-item">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="asset/img/$image" alt="">
                                </div>
                                <div class="team-text">
                                    <div class="bg-light">
                                        <h5 class="fw-bold mb-0">$fullname</h5>
                                        <small>$job</small>
                                    </div>
                                    <div class="bg-primary">
                                        <a class="btn btn-square mx-1" href="$facebook"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square mx-1" href="$twitter"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square mx-1" href="$instagram"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    _end;
                    $eradonal=+2;
                    }
                
}

function testimonial($data){
   
   $eradonal=1;
   foreach ($data['testimonial'] as $value) {
       $message=$value['message'];
       $stars=$value['stars'];
       $image=$value['image'];
       $fullname=$value['fullname'];
       $Profession=$value['Profession'];
       $stars_array=[];
       for($a=0; $a < $stars; $a++){
           $stars_array[]='<small class="fa fa-star text-secondary"></small>';
       }
       $stars_array=implode('',$stars_array);
   echo 
   <<<_end
       <div class="testimonial-item text-center">
           <div class="testimonial-text bg-light text-center p-4 mb-4">
               <p class="mb-0">$message</p>
           </div>
           <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="asset/img/$image" style="width: 80px; height: 80px;">
           <div class="mb-2">
               $stars_array
           </div>
           <h5 class="mb-1">$fullname</h5>
           <p class="m-0">$Profession</p>
       </div>
   _end;
   }
   
}

?>