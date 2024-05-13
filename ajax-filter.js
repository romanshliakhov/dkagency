jQuery(document).ready(function($) {
    const {ajax_url} = ajax_object;
    const categoryBtn = $('button[data-term-id]');
    const projectList = $('.project-list');
    const moreBtn = $('.project-list-more');

    let initialCount;
    function loadProjects(termId = 'all') {
        $(window).width() <= 576 ? initialCount = 2 : initialCount = 4;
        projectList.addClass('loader');

        $.ajax({
            url: ajax_url,
            type: 'POST',
            data: {
                action: 'filter_projects',
                term_id: termId
            },
            success: function(response) {
                projectList.html(response);
                categoryBtn.removeClass('active');
                projectList.addClass('loaded');

                $('.project-list__item',projectList).length > 4 ? moreBtn.show() : moreBtn.hide();
                $(`button[data-term-id='${termId}']`).addClass('active');
            }
        });
    }

    categoryBtn.on('click', function(e) {
        e.preventDefault()
        const termId = $(this).data('term-id');

        projectList.removeClass('loaded');
        loadProjects(termId);
    });


    moreBtn.on('click', function(e) {
        e.preventDefault();
        const children = $('.project-list__item');
        const itemsToShow = children.slice(initialCount, initialCount + 2);

        if (itemsToShow.length) {
            itemsToShow.each(function() {
                $(this).fadeIn();
            });

            initialCount += 2;
            initialCount >= children.length ? moreBtn.hide() : null;
        }
    });

    loadProjects();
});
