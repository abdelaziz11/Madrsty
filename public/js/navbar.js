const nav_items = document.querySelectorAll('.nav-item');
    for (let i = 0; i < nav_items.length; i++)
    {
        nav_items[i].addEventListener('click', function() {
            const current_active = document.querySelector('.active');
            console.log(current_active);
            // current_active.className.replace('active', '');
            // this.className += 'active';
        });
    }