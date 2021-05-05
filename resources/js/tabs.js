function Tabs() {
    const components = document.querySelectorAll('[data-lit-tabs]');

    const bindAll = item => {
        const menuElements = item.querySelectorAll(':scope > [data-tab]');
        for (var i = 0; i < menuElements.length; i++) {
            menuElements[i].addEventListener(
                'click',
                function(event) {
                    event.preventDefault();
                    clear(item);
                    event.target.classList.add('active');

                    const activeClasses = event.target
                        .getAttribute('data-active-classes')
                        .split(' ')
                        .filter(el => el != '')
                        .filter(el => el != null);
                    activeClasses.forEach(className => {
                        event.target.classList.add(className);
                    });

                    const id = event.currentTarget.getAttribute('data-tab');

                    document.getElementById(id)?.classList.add('active');
                },
                false
            );
        }
    };

    const clear = item => {
        const menuElements = item.querySelectorAll(':scope > [data-tab]');
        for (var i = 0; i < menuElements.length; i++) {
            menuElements[i].classList.remove('active');

            const activeClasses = menuElements[i]
                .getAttribute('data-active-classes')
                .split(' ')
                .filter(el => el != '')
                .filter(el => el != null);
            activeClasses.forEach(className => {
                menuElements[i].classList.remove(className);
            });

            const id = menuElements[i].getAttribute('data-tab');

            console.log(menuElements[i].getAttribute('data-active-classes'));

            document.getElementById(id)?.classList.remove('active');
        }
    };

    const setContentClasses = item => {
        const contentClasses = item
            .getAttribute('data-content-classes')
            .split(' ')
            .filter(el => el != '')
            .filter(el => el != null);

        if (contentClasses.length == 0) {
            return;
        }

        const tabs = item.querySelectorAll(':scope > [data-tab-content]');

        tabs.forEach(element => {
            contentClasses.forEach(className => {
                element.classList.add(className);
            });
        });
    };
    const setTabClasses = item => {
        const tabClasses = item
            .getAttribute('data-tab-classes')
            .split(' ')
            .filter(el => el != '')
            .filter(el => el != null);

        if (tabClasses.length == 0) {
            return;
        }

        const tabs = item.querySelectorAll(':scope > [data-tab]');

        tabs.forEach(element => {
            tabClasses.forEach(className => {
                element.classList.add(className);
            });
        });
    };
    const setActiveClasses = item => {
        const classes = item.getAttribute('data-active-classes');

        const tabs = item.querySelectorAll(':scope > [data-tab]');

        tabs.forEach(tab => {
            tab.setAttribute('data-active-classes', classes);
            if (tab.classList.contains('active')) {
                classes
                    .split(' ')
                    .filter(el => el != '')
                    .filter(el => el != null)
                    .forEach(className => {
                        tab.classList.add(className);
                    });
            }
        });
    };

    components.forEach(item => {
        setContentClasses(item);
        setTabClasses(item);
        setActiveClasses(item);
        bindAll(item);
    });
}

const connectTabs = new Tabs();
