(() => {
  // resources/js/app.js
  window.addEventListener("load", function() {
    let main_navigation = document.querySelector("#primary-menu");
    document.querySelector("#primary-menu-toggle").addEventListener("click", function(e) {
      e.preventDefault();
      main_navigation.classList.toggle("hidden");
    });
    (function() {
      var pageNav = document.querySelector(".page-nav");
      if (!pageNav) {
        return;
      }
      var navLinks = pageNav.querySelector("ul");
      var pageHeader = document.querySelector(".page-header");
      var isSmallScreenNav = function isSmallScreenNav2() {
        return getComputedStyle(navLinks).overflow === "auto";
      };
      var getFixedHeaderHeight = function getFixedHeaderHeight2() {
        return isSmallScreenNav() ? pageHeader.offsetHeight + pageNav.offsetHeight : 0;
      };
      var scrollToElement = function scrollToElement2(id) {
        var targetEl = document.getElementById(id);
        if (!targetEl) {
          return;
        }
        var rect = targetEl.getBoundingClientRect();
        var scrollPos = window.scrollY + rect.top;
        var targetY = scrollPos - getFixedHeaderHeight() - 18;
        window.scrollTo({
          top: targetY,
          behavior: "smooth"
        });
      };
      var setActiveNavElement = function setActiveNavElement2(id) {
        pageNav.querySelectorAll("a.active").forEach(function(link) {
          return link.classList.remove("active");
        });
        var activeLink = pageNav.querySelector("a[href*=".concat(id, "]"));
        activeLink.classList.add("active");
        if (isSmallScreenNav()) {
          navLinks.scrollTo({
            left: activeLink.parentElement.offsetLeft,
            behavior: "smooth"
          });
        }
      };
      pageNav.addEventListener("click", function(evt) {
        if (!evt.target.matches('a[href^="#"]')) {
          return;
        }
        evt.preventDefault();
        var targetId = evt.target.href.replace(/.*#(.+)/gi, "$1");
        setActiveNavElement(targetId);
        scrollToElement(targetId);
      });
      var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            setActiveNavElement(entry.target.id);
          }
        });
      }, {
        rootMargin: "".concat(getFixedHeaderHeight() + 10, "px 0px -").concat(window.innerHeight - getFixedHeaderHeight() - 20, "px 0px")
      });
      pageNav.querySelectorAll('a[href^="#"]').forEach(function(navLink) {
        var target = document.getElementById(navLink.href.replace(/.*#(.+)/gi, "$1"));
        if (target) {
          observer.observe(target);
        }
      });
      window.addEventListener("DOMContentLoaded", function() {
        if (window.location.hash) {
          scrollToElement(window.location.hash.replace("#", ""));
        }
      });
      window.addEventListener("load", function() {
        if (window.location.hash) {
          scrollToElement(window.location.hash.replace("#", ""));
        }
      });
    })();
  });
})();
