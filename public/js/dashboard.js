const ctx = document.getElementById('myChart').getContext("2d")

const gradientFill = ctx.createLinearGradient(0, 0, 0, 400)
gradientFill.addColorStop(0, "rgba(64, 186, 255, 0.17)")
gradientFill.addColorStop(1, "rgba(64, 186, 255, 0)")

const myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [
      "Mon", "", "Tue", "", "Wed", "", "Thur", "", "Fri", "", "Sat", "", "Sun"
    ],
    datasets: [{
      label: "Data",
      borderColor: "#4062FF",
      pointBorderColor: "#FFFFFF",
      pointBackgroundColor: "#40BAFF",
      pointBorderWidth: 3,
      pointHoverRadius: 10,
      pointHoverBorderWidth: 3,
      pointRadius: 0,
      tension: 0.4,
      fill: true,
      backgroundColor: gradientFill,
      borderWidth: 3,
      data: [400, 410, 310, 460, 460, 200, 260, 261, 450, 260, 270, 260, 360]
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        display: false,
      },
    },
    scales: {
      x: {
        grid: {
          display: false,
        },
        ticks: {
          font: {
            family: "'Nexa', 'sans-serif'",
            size: 14,
            weight: "bold",
            color: "#919EAB"
          }
        }
      },
      y: {
        grid: {
          display: false,
        },
        min: 100,
        max: 500,
        ticks: {
          stepSize: 100,
          font: {
            family: "'Nexa', 'sans-serif'",
            size: 14,
            weight: "bold",
            color: "#919EAB"
          }
        }
      }
    }
  }
});

const navHamburger = document.querySelector('.nav__hamburger');
const navMenuContainer = document.querySelector('.nav');
const navLogo = document.querySelector('.nav__logo');

navHamburger.addEventListener('click', () => {
  if (navHamburger.classList.contains('active')) {
    navHamburger.classList.remove('active');
    navMenuContainer.classList.remove('active')
    navMenuContainer.style.animation = "fadeOut .5s forwards";
    window.setTimeout(() => {
      navMenuContainer.classList.remove('nav__menu-hamburger');
    }, 500);
    window.setTimeout(() => {
      navLogo.classList.remove('active');
    }, 500);
  } else {
    navHamburger.classList.add('active');
    navMenuContainer.classList.add('active')
    navLogo.classList.add('active')
    navMenuContainer.style.animation = "fadeIn .5s forwards";
  }
})

window.addEventListener('resize', () => {
  if (window.innerWidth <= 768) {
    navMenuContainer.style = "";
    navHamburger.classList.remove('active');
    navMenuContainer.classList.remove('active')
  }
});