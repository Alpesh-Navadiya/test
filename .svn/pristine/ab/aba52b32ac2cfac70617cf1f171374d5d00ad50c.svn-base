//scroll animation library
// AOS.init();

//START NAVBAR

const navbar = document.querySelector(".navbar")
const navbarMobile = document.querySelector(".navbar-mobile")
const hamburger = document.querySelector("#hamburger")
const mobileLinks = document.querySelector("#navbar-mobile__links")
// const overlay = document.querySelector("#overlay")
const navLinks = document.querySelectorAll(".nav-link")
//mobile nav

navLinks.forEach(link => {
    link.addEventListener("click", () => {
        toggleMobileNav()
    })
})
function toggleMobileNav() {
    if (!mobileLinks.classList.contains("is-showing")) {
        mobileLinks.classList += " is-showing"
        hamburger.classList += " is-showing"
        // overlay.classList += " is-showing"
    }
    else {
        mobileLinks.classList.remove("is-showing")
        hamburger.classList.remove("is-showing")
        // overlay.classList.remove("is-showing")
    }
}
hamburger.addEventListener("click", (e) => {
    toggleMobileNav()
})
// overlay.addEventListener("click", () => {
//     toggleMobileNav()
// })

//show navbar when scrolling up, hide when scrolling down
oldScrollPosY = 0;
window.addEventListener("scroll", () => {
    setTimeout(() => {
        oldScrollPosY = window.scrollY;
    }, 50);

    if (window.scrollY > oldScrollPosY) { //scrolled down, show/hide navbar, show scroll up btn
        navbar.classList.remove("is-scrolling-up")
        if (!navbar.classList.contains("is-scrolling-down")) {
            navbar.classList += " is-scrolling-down";
            //buttonScrollUp.classList += " is-showing";
        }

        if (!navbarMobile.classList.contains("is-scrolling")) {
            navbarMobile.classList += " is-scrolling";
        }

    }
    if (window.scrollY < oldScrollPosY) { //scrolled up, show navbar
        navbar.classList.remove("is-scrolling-down")
        if (!navbar.classList.contains("is-scrolling-up"))
            navbar.classList += " is-scrolling-up";

    }
    if (window.scrollY <= 16) { //reset navbar if at top
        navbar.classList.remove("is-scrolling-up")
        navbar.classList.remove("is-scrolling-down")
        navbarMobile.classList.remove("is-scrolling")
        //buttonScrollUp.classList.remove("is-showing")
    }
})

// navbar account and notification open on click

const navNotificationBtns = document.querySelectorAll(".nav__notifications")
navNotificationBtns.forEach(navNotificationBtn => {
    navNotificationBtn.addEventListener("click", function (e) {
        navNotificationBtn.classList.toggle("is-showing")
        //navAccountBtn.classList.remove("is-showing")
    })
})

// const navAccountBtn = document.querySelector(".nav__account")
// if (navAccountBtn) {
//     navAccountBtn.addEventListener("click", function (e) {
//         navAccountBtn.classList.toggle("is-showing")
//         navNotificationBtns.forEach(navNotificationBtn => {
//             navNotificationBtn.classList.remove("is-showing")
//         })
//     })
// }

//END NAVBAR

//global live support chat

var liveSupportBtn = document.querySelector("#live-support-btn")
var liveSupportChatboxWrapper = document.querySelector("#support-chatbox-wrapper")
var liveSupportBtnText = document.querySelector(".live-support-btn__text")
if (liveSupportBtn) {
    liveSupportBtn.addEventListener("click", function () {
        liveSupportBtn.classList.toggle("is-open")
        if (liveSupportBtn.classList.contains("is-open")) {
            liveSupportBtnText.textContent = "X"
        } else {
            liveSupportBtnText.textContent = "Live Support"
        }
        liveSupportChatboxWrapper.classList.toggle("is-open")
    })
}
var accountLiveChatBtn = document.querySelector("#account-live-chat-btn")
if (accountLiveChatBtn) {
    accountLiveChatBtn.addEventListener("click", function () {
        if (!liveSupportBtn.classList.contains("is-open")) {
            liveSupportBtn.classList += " is-open"
            liveSupportBtnText.textContent = "X"
            liveSupportChatboxWrapper.classList += "is-open"
        }
    })
}

var scrollDownBtn = document.querySelector("#scroll-down-btn")
if (scrollDownBtn) {
    scrollDownBtn.addEventListener("click", function () {
        window.scrollTo({
            top: window.innerHeight,
            left: 0,
            behavior: 'smooth'
        });
    })
}
