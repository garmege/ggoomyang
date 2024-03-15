const phoneFirst = document.querySelector("#phoneFirst");
const phoneMid = document.querySelector("#phoneMid");
const phoneLast = document.querySelector("#phoneLast");

/*휴대폰 4자리 치면 다음칸으로 자동 포커스*/
phoneMid.addEventListener("keyup",()=>
{
    if(phoneMid.value.length >=4)
    {
        phoneLast.focus();
    }
});

/*이메일 선택하면 자동으로 입력 & 직접입력 선택시 readOnly 비활성화*/
const emailFirst = document.querySelector("#userEmailFirst");
const emailSelect = document.querySelector("#userEmailSelect");
const emailLast = document.querySelector("#userEmailLast");

emailSelect.addEventListener("change",()=>
{
    //선택한 옵션 태그 값 담기
    const emailAuto = emailSelect.options[emailSelect.selectedIndex].value;
    console.log(emailAuto);

    //조건문으로 직접 입력 선택하면 리드온리 비활성화 >> 직접 입력 가능하게 하기
    if(emailAuto === "direct")
    {
        emailLast.readOnly = false;
        //직접 쓰는 칸에 포커스
        emailLast.focus();
        //다른 옵션 선택했다가 직접 입력 선택시 내용 비우기
        emailLast.value = "";
        //배경 흰색으로 바꿔주기
        emailLast.style.backgroundColor = "#fff";
    }
    //선택하세요 상태일 때 >> 직접입력칸 리드온리 활성화 및 내용 비움
    else if(emailAuto === "")
    {
        emailLast.readOnly = true;
        emailLast.value = "";
        emailLast.style.backgroundColor = "#eee";
    }
    //이메일을 선택했을 때
    else
    {
        emailLast.readOnly = true;
        emailLast.value = emailAuto; //마지막 칸에 값 옮겨주기
        emailLast.style.backgroundColor = "#eee";
    }
});

//회원가입 폼검증
const userForm = document.querySelector("#userform");
const userId = document.querySelector("#userform .line #id");
const userPass = document.querySelector("#userform .line #pass");
const userPassCheck = document.querySelector("#userform .line #passCheck");
const userName = document.querySelector("#userform .line #name");
const userBirth = document.querySelector("#userform .line #birth");
const joinBtn = document.querySelector("#userform .join_btn");
const userGender = document.querySelectorAll("#userform .gender_line .check");
const userGenderError = document.querySelector("#userform .gender_line .error_message");

//회원가입 버튼 클릭시 폼 검증 시작
joinBtn.addEventListener("click",(e)=>
{
    e.preventDefault();
    checkInput();
});

//폼 검증 함수
function checkInput()
{
    //아이디 공백 검증
    if(userId.value === "")
    {
        setError(userId);
        userId.nextElementSibling.style.display = "block";
    }
    else
    {
        setSuccess(userId);
        userId.nextElementSibling.style.display = "none";
    }

    //비밀번호 공백 검증
    if(userPass.value === "")
    {
        setError(userPass);
        userPass.nextElementSibling.style.display = "block";
    }
    else
    {
        setSuccess(userPass);
        userPass.nextElementSibling.style.display = "none";
    }
    
    //비밀번호 확인 검증
    //비밀번호 확인이 공백인 경우 에러
    if(userPassCheck.value === "")
    {
        setError(userPassCheck);
        userPassCheck.nextElementSibling.style.display = "block";
    }
    //비밀번호와 비밀번호 확인이 다른 경우 에러
    else if(userPass.value !== userPassCheck.value)
    {
        setError(userPassCheck);
        userPassCheck.nextElementSibling.style.display = "block";
    }
    //비밀번호와 비밀번호 확인이 같은 경우 성공
    else if(userPass.value === userPassCheck.value)
    {
        setSuccess(userPassCheck);
        userPassCheck.nextElementSibling.style.display = "none";
    }

    //이름 공백 검증
    if(userName.value === "")
    {
        setError(userName)
        userName.nextElementSibling.style.display = "block";
    }
    else
    {
        setSuccess(userName);
        userName.nextElementSibling.style.display = "none";
    }

    //이메일 검증
    if(emailFirst.value === "" || emailLast.value === "")
    {
        setError(emailFirst);
        setError(emailLast);
        emailLast.nextElementSibling.style.display = "block";
    }
    else
    {
        setSuccess(emailFirst);
        setSuccess(emailLast);
        emailLast.nextElementSibling.style.display = "none";
    }

    //성별 검증 >> 나중에 다시 확인해서 수정하기


    //연락처 검증
    if(phoneMid.value === "" || phoneLast.value === "")
    {
        setError(phoneMid);
        setError(phoneLast);
        phoneLast.nextElementSibling.style.display = "block";
    }
    else
    {
        setSuccess(phoneMid);
        setSuccess(phoneLast);
        phoneLast.nextElementSibling.style.display = "none";
    }

    //생년월일 검증
    if(userBirth.value === "")
    {
        setError(userBirth);
        userBirth.nextElementSibling.style.display = "block";
    }
    else
    {
        setSuccess(userBirth);
        userBirth.nextElementSibling.style.display = "none";
    }

    //최종검증
    if(userId.value !== "" && userPass.value !== "" && userPassCheck.value !== ""
        && userPass.value === userPassCheck.value && userName.value !== "" &&
        emailFirst.value !== "" && emailLast.value !== "" && phoneFirst.value !== ""
        && phoneMid.value !== "" && phoneLast.value !== "" && userBirth.value !== "")
    {
       
    }
}

//폼 검증 에러시 함수
function setError(input)
{   
    input.className = "error";
}

//폼 검증 성공시 함수
function setSuccess(input)
{   
    input.className = "success";
}