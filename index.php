<?php   
        include "main.html";
        include "navbar.html";
        include "home.html";
        include "about.html";
        include "contact.html";
        include "more.html";
        include "follow.html";
        include "work.html";
        include "project.html";
        include "skill.html";
        include "work1.html";
        include "work2.html";
        include "work3.html";
        include "project1.html";
        include "project2.html";
        include "project3.html";
        
    
?>
<style>
    nav{
        top: -100px;
    }
    .home,.about,.contact,.follow,.mainproject,.skill,.mainmore,.mainwork{
        display: none;
    }
    .work_1,.work_2,.work_3,.project_1,.project_2,.project_3{
        display: none;
    }
</style>

<script>
        var current=0;
        
        const main=document.getElementById("main");
        const navbar=document.getElementById("navbar");
        const home=document.getElementById("home");
        const about=document.getElementById("about");
        const contact=document.getElementById("contact");
        const follow=document.getElementById("follow");
        const workhtml=document.getElementById("workhtml");
        const projecthtml=document.getElementById("projecthtml");       
        const skill=document.getElementById("skill");      
        const morehtml=document.getElementById("morehtml");      
        const work1=document.getElementById("work_1");      
        const work2=document.getElementById("work_2");      
        const work3=document.getElementById("work_3");      
        const project1=document.getElementById("project_1");      
        const project2=document.getElementById("project_2");      
        const project3=document.getElementById("project_3");      
        
        


        document.addEventListener("keydown",function(event){
            if (event.key === "ArrowRight"){
                if(current<8 && current!=4){
                current=current+1;
                }
                if (current==1){
                    main.style.display="none";
                    navbar.style.top="0px"
                    home.style.display="block";
                    
                }
                if (current==2){
                    home.style.display="none";
                    about.style.display="block";
                }
                if (current==3){
                    about.style.display="none";
                    contact.style.display="block";
                }
                if (current==4){
                    contact.style.display="none";
                    morehtml.style.display="block";
                }
                if(current==6){
                    
                    follow.style.display="none";
                    workhtml.style.display="block";
                    
                }   
                if(current==7){
                    
                    workhtml.style.display="none";
                    projecthtml.style.display="block";
                    
                } 
                if(current==8){
                    main.style.display="none";
                    navbar.style.top="0px"
                    home.style.display="none";
                    about.style.display="none";
                    contact.style.display="none";
                    follow.style.display="none";
                    workhtml.style.display="none";
                    contact.style.display="none";
                    skill.style.display="none";
                    projecthtml.style.display="none";
                    morehtml.style.display="none";
                    follow.style.display="none";
                    workhtml.style.display="none";
                    projecthtml.style.dissplay="none";
                    skill.style.display="block";
                }            
            }


            if (event.key === "ArrowLeft"){
                if(current!=0 && current!=5){
                current=current-1
                }
                if (current==0){
                    main.style.display="block";
                    navbar.style.top="-100px"
                    home.style.display="none";
                    about.style.display="none";
                    contact.style.display="none";
                    follow.style.display="none";
                    workhtml.style.display="none";
                    contact.style.display="none";
                    skill.style.display="none";
                    projecthtml.style.display="none";
                    morehtml.style.display="none";
                    
                }
                if (current==1){
                    main.style.display="none";
                    navbar.style.top="0px"
                    home.style.display="block";
                    about.style.display="none";
                    
                }
                if (current==2){
                    home.style.display="none";
                    about.style.display="block";
                    contact.style.display="none";
                    
                }
                if (current==3){
                    about.style.display="none";
                    contact.style.display="block";
                    morehtml.style.display="none";

                    
                }
                if(current==4){
                    contact.style.display="none";
                    morehtml.style.display="block";
                }
                if(current==5){
                    
                    morehtml.style.display="none";
                    follow.style.display="block";
                    workhtml.style.display="none";
                    
                }
                if(current==6){
                    
                    follow.style.display="none";
                    workhtml.style.display="block";
                    projecthtml.style.dissplay="none";
                    
                }   
                if(current==7){
                    
                    workhtml.style.display="none";
                    projecthtml.style.display="block";
                    skill.style.display="none";
                } 
                

            }
        })


        const btn=document.getElementById("btn");
        const btn1=document.getElementById("btn1");
        const bb1=document.getElementById("bb1");
        const bbc1=document.getElementById("bbc1");
        btn.addEventListener("mouseover",function(){
            btn.innerHTML = "Welcome";
            btn1.style.display="block";
            bb1.style.display="none";
            bbc1.style.display="none";
        })
        btn.addEventListener("mouseout",function(){
            btn.innerHTML = "&#128269;";
            btn1.style.display="none";
            bb1.style.display="block";
            bbc1.style.display="block";
        })
        btn.addEventListener("click",function(){
            current=current+1;
            main.style.display="none";
            navbar.style.top="0px"
            home.style.display="block";
            about.style.display="none";
            contact.style.display="none";
        })
        function temp(){
                    work1.style.display="none";
                    work2.style.display="none";
                    work3.style.display="none";
                    project1.style.display="none";
                    project2.style.display="none";
                    project3.style.display="none";
        }
        function temp_1(){
            main.style.display="none";
                    navbar.style.top="-100px"
                    home.style.display="none";
                    about.style.display="none";
                    contact.style.display="none";
                    follow.style.display="none";
                    workhtml.style.display="none";
                    contact.style.display="none";
                    skill.style.display="none";
                    projecthtml.style.display="none";
                    morehtml.style.display="none";
                    follow.style.display="none";
                    workhtml.style.display="none";
                    projecthtml.style.dissplay="none";
                    skill.style.display="none";
        }

        function home_(){
                    temp_1()
                    navbar.style.top=0;
                    home.style.display="block";
                    
                    current=1;
                    temp()
                    
        }


        function about_(){
                    temp_1()
                    navbar.style.top=0;
                    about.style.display="block";
                    
                    current=2
                   temp();
        }


        function contact_(){
                    temp_1()
                    navbar.style.top=0;
                    contact.style.display="block";
                    current=3
                    temp()
        }


        function more_(){
                    main.style.display="none";
                    navbar.style.top="0px"
                    home.style.display="none";
                    about.style.display="none";
                    contact.style.display="none";
                    follow.style.display="none";
                    workhtml.style.display="none";
                    contact.style.display="none";
                    skill.style.display="none";
                    projecthtml.style.display="none";
                    morehtml.style.display="block";
                    follow.style.display="none";
                    workhtml.style.display="none";
                    projecthtml.style.dissplay="none";
                    skill.style.display="none"
                    current=4
                    temp()
                   
        }
        function follow_(){
                    temp_1()
                    navbar.style.top=0;
                    follow.style.display="block";
                    current=5;
                    temp()
        }
        
        function work_(){
                    temp_1()
                    navbar.style.top=0;
                    workhtml.style.display="block";
                    current=6;
                    temp()
        }
        function project_(){
                    temp_1()
                    navbar.style.top=0;
                    projecthtml.style.display="block";
                    current=7;
                    temp()

        }
        function skill_(){
                    temp_1()
                    navbar.style.top=0;
                    skill.style.display="block";
                    current=8;
                    temp()
        }
        function work_1(){
                    temp_1()
                    temp()
                    work1.style.display="block";
                    
        }
        function work_2(){
                    temp_1()
                    temp()
                    work2.style.display="block";
                    
        }
        function work_3(){
                    temp_1()
                    temp()
                    work3.style.display="block";
                    
        }
        
        function project_1(){
                    temp_1()
                    temp()
                    project1.style.display="block";
                    
        }
        
        function project_2(){
                    temp_1()
                    temp()
                    project2.style.display="block";
                    
        }
        
        function project_3(){
                    temp_1()
                    temp()
                    project3.style.display="block";
                    
        }
        
</script>
<script src="https://kit.fontawesome.com/a5aed40822.js" crossorigin="anonymous"></script>


