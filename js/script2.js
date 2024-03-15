//모바일 메뉴 나오게 하는 작업
const ham = document.querySelector(".m_menu_btn");
const close = document.querySelector(".m_close");

ham.addEventListener("click",()=>{
    document.querySelector(".m_menu").style.right = "0";
});

close.addEventListener("click",()=>{
    document.querySelector(".m_menu").style.right = "-300px";
});

const gnb = document.querySelector(".gnb");
const gnbBg = document.querySelector(".gnb_bg");
const depth1 = document.querySelectorAll(".m_menu_list > li");
const depth2 = document.querySelectorAll(".depth2")
const mDepth2 = document.querySelectorAll(".m_depth2");
const gnbSet = [gnb , gnbBg];
//모바일 메뉴 클릭 이벤트
for(let i = 0; i < depth1.length; i++)
{
    depth1[i].addEventListener("click",()=>
    {
        if(depth1[i].classList.contains("on"))
        {
            depth1[i].classList.remove("on");
            depth1[i].style.height = depth1[i].offsetHeight - mDepth2[i].offsetHeight + "px";
        }
        else
        {
            const open = document.querySelectorAll(".m_menu_list > li.on");
            for(let j = 0; j < open.length; j++)
            {
                open[j].classList.remove("on");
                open[j].style.height = depth1[i].offsetHeight + "px";
            }
            depth1[i].classList.add("on");
            depth1[i].style.height = depth1[i].offsetHeight + mDepth2[i].offsetHeight + "px";
        }
    });
}
//gnb depth2 나오게 하는 작업
for(let i = 0; i < gnbSet.length; i++)
    {
        gnbSet[i].addEventListener("mouseover",()=>{

            for(let j = 0; j <depth2.length; j++){
                depth2[j].style.display = "block";
            };
            gnbBg.style.display = "block";
    });

    gnbSet[i].addEventListener("mouseout",()=>
    {
        for(let j = 0; j < depth2.length; j++){
            depth2[j].style.display = "none";    
        };
        gnbBg.style.display = "none";
    });
}
//슬라이더 작업
const view = document.querySelector(".view");
// 클릭할 이전 버튼
const leftBtn = document.querySelector(".left_btn");
// 클릭할 이후 버튼
const rightBtn = document.querySelector(".right_btn");
// 버튼 클릭시 순번 바뀔 값(변수)
let slideNumber = 0;
//pager 안에 li 태그를 클릭했을 때 data-index 값을 가지고옴
const pager = document.querySelectorAll(".pager li");
// 이전버튼 클릭시 슬라이드 이동
leftBtn.addEventListener("click",()=>
{
    if(slideNumber == 0)
    {
        slideNumber = 2;
    }
    else
    {
        slideNumber--;
    }
    //동그라미 버튼들 클래스 on 전부 제거
    for(let i = 0; i < pager.length; i++)
    {
        pager[i].classList.remove("on");
    }
    pager[slideNumber].classList.add("on");
    //slideNumber 숫자값과 매칭되는 li태그 버튼만 선택
    view.style.marginLeft = -100*slideNumber + "%";
});

rightBtn.addEventListener("click",()=>
{
    if(slideNumber == 2)
    {
        slideNumber = 0;
    }
    else
    {
        slideNumber++;
    }
      //동그라미 버튼들 클래스 on 전부 제거
      for(let i = 0; i < pager.length; i++)
      {
          pager[i].classList.remove("on");
      }
    pager[slideNumber].classList.add("on");
    view.style.marginLeft = -100*slideNumber + "%";
});


//pager 안에 li 태그 5개 선택 (배열 형태)
for(let i = 0; i < pager.length; i++)
{
    pager[i].addEventListener("click",(e)=>
    {
        //동그라미 클릭하면 색상변경
        for(let j = 0; j < pager.length; j++)
        {
            pager[j].classList.remove("on"); 
        }
        //클릭을 한 나 자신(li 태그)
        e.currentTarget.classList.add("on");
        //클릭한 li태그의 data-index 속성값을 가지고 옴
        slideNumber = e.currentTarget.getAttribute("data-index");
        //슬라이드 화면 움직임
        view.style.marginLeft = -100*slideNumber + "%";
    });
}

//탭메뉴 작업
const tabList = document.querySelectorAll(".tab_menu > li");
const tabCont = document.querySelectorAll(".tab_cont .list");
for(let t = 0; t < tabList.length; t++)
{
    tabList[t].addEventListener("click",(e)=>
    {
        for(let t = 0; t < tabList.length; t++)
        {
            tabList[t].classList.remove("on");
            tabCont[t].style.display = "none";
        }
        e.currentTarget.classList.add("on");
        tabCont[t].style.display = "flex";
        e.preventDefault();
    });
}
//자동 슬라이드 작업
//pager 안에 li 태그 5개 선택 (배열 형태)
const pagerLength = pager.length; //3
//pager 안에 있는 li태그 갯수(길이) 값 담아놓음
const stopBtn = document.querySelector(".stop_btn");
//멈춤버튼 대상
const playBtn = document.querySelector(".play_btn");
let autoSlide = setInterval(()=>
{
    if(slideNumber == pagerLength - 1)
    {
        slideNumber = 0;
    }
    else
    {
        slideNumber++;
    }
    //동그라미 클래스 전부 제거
    for(let i = 0; i < pagerLength; i++)
    {
        //li 태그들 0번째부터 4번째까지 클래스 제거
        pager[i].classList.remove("on");
    }
    //다음 순번의 동그라미 클래스 추가
    pager[slideNumber].classList.add("on");
    //슬라이드 화면 넘어감
    view.style.marginLeft = -100 * slideNumber + "%";
},3000);
//멈춤버튼을 눌렀을 때 자동실행 멈춤
stopBtn.addEventListener("click",()=>
{
    stopBtn.style.display = "none";
    playBtn.style.display = "block";
    clearInterval(autoSlide);
    //자동기능이 들어가있는 변수이름으로 설정해야 자동실행 기능이 멈춰지는 동작 실행
});
//재생버튼을 눌럿을 때 자동실행 시작
playBtn.addEventListener("click",()=>
{
    stopBtn.style.display = "block";
    playBtn.style.display = "none";
    autoSlide = setInterval(()=>
    {
        if(slideNumber == pagerLength - 1)
        {
            slideNumber = 0;
        }
        else
        {
            slideNumber++;
        }
        //동그라미 클래스 전부 제거
        for(let i = 0; i < pagerLength; i++)
        {
            //li 태그들 0번째부터 4번째까지 클래스 제거
            pager[i].classList.remove("on");
        }
        //다음 순번의 동그라미 클래스 추가
        pager[slideNumber].classList.add("on");
        //슬라이드 화면 넘어감
        view.style.marginLeft = -100 * slideNumber + "%";
    },3000);
});
//스크롤 기능 작업
const header = document.querySelector("#header");
const scrollAni = document.querySelector(".scroll_ani");
window.addEventListener("scroll",()=>
{
    let scTop = window.scrollY;
    if(scTop > 300)
    {
        header.classList.add("on");
    }
    else
    {
        header.classList.remove("on");
    }
    
    if(scTop >= 500)
    {
        scrollAni.style.display = "block";
    }
    else
    {
        scrollAni.style.display = "none";
    }
});

scrollAni.addEventListener("click",(e)=>
{
    window.scrollTo({
        top:0,
        left:0,
        behavior:"smooth"
    })
    e.preventDefault();
});

