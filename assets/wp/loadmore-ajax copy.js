// function articleLoadMore(offset, activeTab, selectedCategory) {
function articleLoadMore() {
    var ajax_url = ajax_loadmore_params.ajax_url; // Ensure this matches your localized script object

    // console.log('AJAX URL:', ajax_url);
    // console.log('Offset:', offset);
    // console.log('Active Tab:', activeTab);
    // console.log('Selected Category:', selectedCategory);


    jQuery.ajax({
        type: "POST",
        url: ajax_url,
        data: {
            action: 'article_loadmore',
            // offset: offset,
            // activeTab: activeTab,
            // selectedCategory: selectedCategory
        },
        beforeSend: function (xhr) {
            console.log('Full request URL:', this.url);
            console.log('Request data:', this.data);
            // jQuery('.s-investment-articles-list-container.active .s-investment-cards-row').addClass('loading');
            // jQuery('.s-investment-articles-list-container.active .s-investment-cards-row').html('<span></span><span></span><span></span>');
        },

        success: function (data) {
            var container = jQuery(".s-investment-articles-list-container.active .s-investment-cards-row");
            container.append(data);
            
            // Animate the newly added articles
            container.find('.s-investment-cards-card').hide().fadeIn(600);
        },
        // error: function () {
        //     jQuery(".s-investment-articles-list-container.active .s-investment-cards-row").html('<p>There has been an error loading more articles.</p>');
        // },
        error: function (data, xhr, status, error) {
            console.log('data:', data);
            console.log('AJAX Error:', status, error);
            console.log('AJAX Response:', xhr.responseText);
            
            jQuery(".s-investment-articles-list-container.active .s-investment-cards-row").html('<p>There has been an error loading more articles.</p>');
        },
        complete: function () {
            jQuery('.s-investment-articles-list-container.active .s-investment-cards-row').removeClass('loading');
        }
    });
}


jQuery(document).ready(function ($) {
    let selectedCategory = '';
    // selectedCategory = selectedCategory || '0';

    let $viewMoreButton = jQuery('.s-investment-btn__view-more');
    let offset = $viewMoreButton.data('offset');

    // Check if offset is undefined or null and set default
    if (offset === undefined || offset === null) {
        offset = 0;
        $viewMoreButton.data('offset', offset); // Set the default offset in the data attribute
    }

    jQuery('.s-investment-tag-box').on('click', function (e) {
        e.preventDefault();
        let categoryId = $(this).attr('id').split('-')[1];

        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
            selectedCategory = selectedCategory.split(',').filter(id => id !== categoryId).join(',');
        } else {
            $(this).addClass('selected');
            selectedCategory = selectedCategory ? `${selectedCategory},${categoryId}` : categoryId;
        }

        // Update the data attribute directly
        jQuery('.s-investment-tag-list').attr('data-selected', selectedCategory);

        let activeTab = jQuery('.s-investment-articles-list-tab.active').data('tab');
        let offset = jQuery('.s-investment-articles-listing-btn .s-investment-btn__view-more').data('offset');
        
        
        $('html, body').animate({
            scrollTop: jQuery('.s-investment-articles-list').offset().top
        }, 600);

        articleLoadMore(offset, activeTab, selectedCategory);
    });


    jQuery('.s-investment-articles-list-tab').on('click', function (e) {
        e.preventDefault();
        jQuery('.s-investment-articles-list-tab.active').removeClass('active');
        $(this).addClass('active');
        let activeTab = $(this).data('tab');

        let offset = jQuery('.s-investment-articles-listing-btn .s-investment-btn__view-more').data('offset');

        let selectedCategory = jQuery('.s-investment-tag-list').data('selected');

        $('html, body').animate({
            scrollTop: jQuery('.s-investment-articles-list').offset().top
        }, 600);

        articleLoadMore(offset, activeTab, selectedCategory);
    });    

    jQuery('.s-investment-articles-listing-btn .s-investment-btn__view-more').on('click', function (e) {
        e.preventDefault();
        let offset = $(this).data('offset');
        offset += 12;
        let activeTab = jQuery('.s-investment-articles-list-tab.active').data('tab');
        let selectedCategory = jQuery('.s-investment-tag-list').data('selected');

        articleLoadMore(offset, activeTab, selectedCategory);
    });
});
