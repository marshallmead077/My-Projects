const secondshand = document.getElementById('seconds-hand');
const minuteshand = document.getElementById('minutes-hand');
const hourshand  = document.getElementById('hours-hand');

function gettime() {
    const now = new Date();
    const seconds = now.getSeconds;
    const minutes = now.getMinutes;
    const hours = now.getHours;

    const timeinterval = 6;

    secondshand.style.transform = 'rotate('+(seconds * timeinterval) + 'deg)';
    minuteshand.style.transform = 'rotate('+(minutes * timeinterval + seconds / 10) + 'deg)';
    hourshand.style.transform = 'rotate('+(hours * 30 + minutes / 2) + 'deg)';
}

setInterval(gettime, 100);