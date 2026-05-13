document.addEventListener('DOMContentLoaded', () => {
    
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    window.revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                window.revealObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    window.refreshReveal = () => {
        document.querySelectorAll('.reveal').forEach(el => window.revealObserver.observe(el));
    };

    window.refreshReveal();

    
    const nav = document.querySelector('nav');
    if (nav) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                nav.classList.add('shadow-md');
            } else {
                nav.classList.remove('shadow-md');
            }
        });
    }

    
    const vegBtn = document.getElementById('veg-toggle');
    const nonvegBtn = document.getElementById('nonveg-toggle');
    const mealTexts = document.querySelectorAll('.meal-text');
    const mealImages = document.querySelectorAll('.meal-image');

    function updateMenu(type) {
        if (!vegBtn || !nonvegBtn) return;

        if (type === 'veg') {
            vegBtn.classList.add('bg-calirify-orange', 'text-white', 'shadow-lg');
            vegBtn.classList.remove('text-gray-400', 'bg-white', 'text-calirify-orange', 'shadow-sm');
            nonvegBtn.classList.remove('bg-calirify-orange', 'text-white', 'shadow-lg', 'bg-white', 'text-calirify-orange', 'shadow-sm');
            nonvegBtn.classList.add('text-gray-400');
        } else {
            nonvegBtn.classList.add('bg-calirify-orange', 'text-white', 'shadow-lg');
            nonvegBtn.classList.remove('text-gray-400', 'bg-white', 'text-calirify-orange', 'shadow-sm');
            vegBtn.classList.remove('bg-calirify-orange', 'text-white', 'shadow-lg', 'bg-white', 'text-calirify-orange', 'shadow-sm');
            vegBtn.classList.add('text-gray-400');
        }

        mealTexts.forEach(meal => {
            meal.style.opacity = ''; 
            meal.classList.add('switching');
            setTimeout(() => {
                meal.textContent = meal.getAttribute(`data-${type}`);
                meal.classList.remove('switching');
            }, 400);
        });

        mealImages.forEach(img => {
            img.style.opacity = ''; 
            img.classList.add('switching');
            setTimeout(() => {
                if (img.hasAttribute(`data-${type}`)) {
                    img.src = img.getAttribute(`data-${type}`);
                }
                img.classList.remove('switching');
            }, 400);
        });

        const macroSpans = document.querySelectorAll('.meal-macros span');
        macroSpans.forEach(span => {
            span.classList.add('switching');
            setTimeout(() => {
                if (span.hasAttribute(`data-${type}`)) {
                    span.textContent = span.getAttribute(`data-${type}`);
                }
                span.classList.remove('switching');
            }, 400);
        });
    }

    if (vegBtn) vegBtn.addEventListener('click', () => updateMenu('veg'));
    if (nonvegBtn) nonvegBtn.addEventListener('click', () => updateMenu('nonveg'));

    
    function initDragScroll(el) {
        if (!el) return;
        let isDown = false, startX, scrollLeft;

        el.querySelectorAll('img').forEach(img => img.draggable = false);

        el.addEventListener('mousedown', (e) => {
            isDown = true;
            el.style.scrollBehavior = 'auto';
            el.style.scrollSnapType = 'none';
            el.style.userSelect = 'none';
            startX = e.pageX - el.offsetLeft;
            scrollLeft = el.scrollLeft;
        });

        el.addEventListener('mouseleave', () => {
            if (!isDown) return;
            isDown = false;
            el.style.scrollBehavior = 'smooth';
            el.style.scrollSnapType = '';
            el.style.userSelect = '';
        });

        el.addEventListener('mouseup', () => {
            isDown = false;
            el.style.scrollBehavior = 'smooth';
            el.style.scrollSnapType = '';
            el.style.userSelect = '';
        });

        el.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - el.offsetLeft;
            const walk = (x - startX) * 2;
            el.scrollLeft = scrollLeft - walk;
        });
    }

    
    initDragScroll(document.getElementById('menu-container'));
    initDragScroll(document.getElementById('process-container'));
    initDragScroll(document.getElementById('testimonials-container'));

    
    const menuSlider = document.getElementById('menu-container');
    if (menuSlider) {
        const scrollLeftBtn = document.getElementById('scroll-left');
        const scrollRightBtn = document.getElementById('scroll-right');
        
        if (scrollLeftBtn && scrollRightBtn) {
            scrollLeftBtn.addEventListener('click', () => {
                menuSlider.scrollBy({ left: -400, behavior: 'smooth' });
            });
            scrollRightBtn.addEventListener('click', () => {
                menuSlider.scrollBy({ left: 400, behavior: 'smooth' });
            });
        }

        
        const dots = document.querySelectorAll('#menu-dots .menu-dot');
        if (dots.length) {
            menuSlider.addEventListener('scroll', () => {
                const cards = menuSlider.querySelectorAll('.menu-day');
                const scrollPos = menuSlider.scrollLeft + menuSlider.offsetWidth / 2;
                let activeIndex = 0;
                cards.forEach((card, i) => {
                    if (card.offsetLeft <= scrollPos) activeIndex = i;
                });
                dots.forEach((dot, i) => {
                    if (i === activeIndex) {
                        dot.classList.remove('bg-calirify-orange/20');
                        dot.classList.add('bg-calirify-orange', 'w-4');
                    } else {
                        dot.classList.remove('bg-calirify-orange', 'w-4');
                        dot.classList.add('bg-calirify-orange/20');
                    }
                });
            });
        }
    }

    const testimonialSlider = document.getElementById('testimonials-container');
    if (testimonialSlider) {
        const dots = document.querySelectorAll('#testimonial-dots .testimonial-dot');
        if (dots.length) {
            testimonialSlider.addEventListener('scroll', () => {
                const cards = testimonialSlider.querySelectorAll('.group');
                const scrollPos = testimonialSlider.scrollLeft + testimonialSlider.offsetWidth / 2;
                let activeIndex = 0;
                cards.forEach((card, i) => {
                    if (card.offsetLeft <= scrollPos) activeIndex = i;
                });
                dots.forEach((dot, i) => {
                    if (i === activeIndex) {
                        dot.classList.remove('bg-calirify-orange/20');
                        dot.classList.add('bg-calirify-orange', 'w-4');
                    } else {
                        dot.classList.remove('bg-calirify-orange', 'w-4');
                        dot.classList.add('bg-calirify-orange/20');
                    }
                });
            });
        }
    }

    
    const today = new Date().getDay(); 
    const dayCards = document.querySelectorAll('.menu-day');
    dayCards.forEach(card => {
        if (parseInt(card.getAttribute('data-day')) === today) {
            card.classList.add('ring-2', 'ring-calirify-orange', 'bg-calirify-orange/5', 'scale-105', 'z-10');
            const dayLabel = card.querySelector('p:first-child');
            if (dayLabel) dayLabel.innerHTML += ' <span class="ml-2 bg-calirify-orange text-white px-2 py-0.5 rounded-full text-[8px]">TODAY</span>';
        }
    });

    
    document.querySelectorAll('.faq-button').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const icon = button.querySelector('span:last-child');
            if (!content || !icon) return;
            
            const isOpen = content.classList.contains('open');

            document.querySelectorAll('.faq-content').forEach(otherContent => {
                if (otherContent !== content) {
                    otherContent.classList.remove('open');
                    otherContent.style.maxHeight = '0px';
                    const otherIcon = otherContent.previousElementSibling.querySelector('span:last-child');
                    if (otherIcon) otherIcon.textContent = '+';
                }
            });

            if (!isOpen) {
                content.classList.add('open');
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.textContent = '−';
            } else {
                content.classList.remove('open');
                content.style.maxHeight = '0px';
                icon.textContent = '+';
            }
        });
    });

    
    const heroPickTitle = document.querySelector('.hero-pick-title');
    if (heroPickTitle) {
        const currentDayCard = document.querySelector(`.menu-day[data-day="${today}"]`);
        if (currentDayCard && today !== 0) {
            const mealEl = currentDayCard.querySelector('.meal-text');
            if (mealEl) {
                const lunchText = mealEl.getAttribute('data-veg');
                heroPickTitle.textContent = lunchText;
            }
        } else if (today === 0) {
            heroPickTitle.textContent = "Chef's Special Sunday Break";
        }
    }

    
    const scrollTopBtn = document.getElementById('scroll-top');
    if (scrollTopBtn) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                scrollTopBtn.classList.remove('translate-y-32', 'opacity-0', 'pointer-events-none');
                scrollTopBtn.classList.add('translate-y-0', 'opacity-100');
            } else {
                scrollTopBtn.classList.add('translate-y-32', 'opacity-0', 'pointer-events-none');
                scrollTopBtn.classList.remove('translate-y-0', 'opacity-100');
            }
        });

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    if (sections.length && navLinks.length) {
        const scrollObserverOptions = {
            threshold: 0.5,
            rootMargin: "-80px 0px 0px 0px"
        };

        const scrollObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (id === 'home' && link.getAttribute('href') === '#') {
                            link.classList.add('active');
                        }
                        if (link.getAttribute('href') === `#${id}`) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        }, scrollObserverOptions);

        sections.forEach(section => scrollObserver.observe(section));

        const firstSection = document.querySelector('section:first-of-type');
        if (firstSection && !firstSection.id) {
            firstSection.setAttribute('id', 'home');
            scrollObserver.observe(firstSection);
        }
    }

    
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    let isMenuOpen = false;

    function toggleMenu() {
        if (!mobileMenu || !mobileMenuBtn) return;
        isMenuOpen = !isMenuOpen;
        if (isMenuOpen) {
            mobileMenu.classList.remove('pointer-events-none', 'opacity-0', '-translate-y-4');
            mobileMenuBtn.classList.add('active');
            const l1 = mobileMenuBtn.querySelector('.line-1');
            const l2 = mobileMenuBtn.querySelector('.line-2');
            const l3 = mobileMenuBtn.querySelector('.line-3');
            if (l1) l1.style.transform = 'translateY(8px) rotate(45deg)';
            if (l2) l2.style.opacity = '0';
            if (l3) l3.style.transform = 'translateY(-8px) rotate(-45deg)';
            document.body.style.overflow = 'hidden';
        } else {
            mobileMenu.classList.add('pointer-events-none', 'opacity-0', '-translate-y-4');
            mobileMenuBtn.classList.remove('active');
            const l1 = mobileMenuBtn.querySelector('.line-1');
            const l2 = mobileMenuBtn.querySelector('.line-2');
            const l3 = mobileMenuBtn.querySelector('.line-3');
            if (l1) l1.style.transform = 'none';
            if (l2) l2.style.opacity = '1';
            if (l3) l3.style.transform = 'none';
            document.body.style.overflow = '';
        }
    }

    if (mobileMenuBtn) mobileMenuBtn.addEventListener('click', toggleMenu);

    
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            
            
            if (href.startsWith('#') || href.includes('index.html#')) {
                const targetId = href.split('#')[1];
                
                if (!targetId || targetId === '') {
                    
                    e.preventDefault();
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    return;
                }

                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    e.preventDefault();
                    const headerOffset = 100;
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                    
                    if (isMenuOpen) toggleMenu();
                }
            }
        });
    });

    let currentGoal = 'weightloss';

    window.selectGoal = function(goal) {
        currentGoal = goal;
        
        document.querySelectorAll('.goal-btn').forEach(btn => {
            btn.classList.remove('bg-calirify-orange', 'text-white', 'shadow-md', 'shadow-calirify-orange/15');
            btn.classList.add('text-gray-500');
        });
        
        const activeBtn = document.getElementById(`goal-${goal}`);
        if (activeBtn) {
            activeBtn.classList.add('bg-calirify-orange', 'text-white', 'shadow-md', 'shadow-calirify-orange/15');
            activeBtn.classList.remove('text-gray-500');
        }
        
        const slider = document.getElementById('calorie-slider');
        if (slider) {
            if (goal === 'weightloss') slider.value = 1600;
            else if (goal === 'balanced') slider.value = 2000;
            else if (goal === 'muscle') slider.value = 2400;
        }
        
        updateCalculations();
    };

    window.updateCalculations = function() {
        const slider = document.getElementById('calorie-slider');
        const sliderValLabel = document.getElementById('slider-val-label');
        if (!slider) return;
        
        const cal = parseInt(slider.value);
        if (sliderValLabel) {
            sliderValLabel.textContent = cal.toLocaleString() + ' kcal';
        }
        
        let pPct, cPct, fPct;
        let planTitle = "";
        let planDesc = "";
        
        if (currentGoal === 'weightloss') {
            pPct = 35;
            cPct = 25;
            fPct = 40;
            planTitle = "Keto Diet Plan";
            planDesc = "Low-carb, high-fat design to jumpstart ketosis, perfect for rapid energy shift and toning.";
        } else if (currentGoal === 'balanced') {
            pPct = 25;
            cPct = 45;
            fPct = 30;
            planTitle = "Daily Healthy Plan";
            planDesc = "Balanced macros with nutrient-rich proteins and smart carbs to power active maintenance.";
        } else if (currentGoal === 'muscle') {
            pPct = 40;
            cPct = 40;
            fPct = 20;
            planTitle = "14D Transformation";
            planDesc = "High-protein, moderate carb configuration built specifically to build mass and repair muscle tissue.";
        }
        
        const pG = Math.round((cal * (pPct/100)) / 4);
        const cG = Math.round((cal * (cPct/100)) / 4);
        const fG = Math.round((cal * (fPct/100)) / 9);
        
        const pGLabel = document.getElementById('protein-g-label');
        const cGLabel = document.getElementById('carbs-g-label');
        const fGLabel = document.getElementById('fats-g-label');
        
        if (pGLabel) pGLabel.textContent = pG + 'g';
        if (cGLabel) cGLabel.textContent = cG + 'g';
        if (fGLabel) fGLabel.textContent = fG + 'g';
        
        const pBar = document.getElementById('protein-bar');
        const cBar = document.getElementById('carbs-bar');
        const fBar = document.getElementById('fats-bar');
        
        const maxP = 300;
        const maxC = 338;
        const maxF = 133;
        
        if (pBar) pBar.style.width = Math.max(8, Math.min(100, (pG / maxP) * 100)) + '%';
        if (cBar) cBar.style.width = Math.max(8, Math.min(100, (cG / maxC) * 100)) + '%';
        if (fBar) fBar.style.width = Math.max(8, Math.min(100, (fG / maxF) * 100)) + '%';
        
        const planTitleEl = document.getElementById('match-plan-title');
        const planDescEl = document.getElementById('match-plan-desc');
        
        if (planTitleEl) planTitleEl.textContent = planTitle;
        if (planDescEl) planDescEl.textContent = planDesc;
    };

    const slider = document.getElementById('calorie-slider');
    if (slider) {
        updateCalculations();
    }
});