const steps = document.querySelectorAll('.step-box');

    window.addEventListener('scroll', showSteps);

    function showSteps() {
      const trigger = window.innerHeight * 0.85;

      steps.forEach(step => {
        const boxTop = step.getBoundingClientRect().top;
        if (boxTop < trigger) {
          step.classList.add('active');
        }
      });
    }

    // Show first few steps on load
    showSteps();