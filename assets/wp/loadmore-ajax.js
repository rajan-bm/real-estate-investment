function loadMore(offset, activeTab) {
    var ajax_url = ajax_loadmore_params.ajax_url;
    jQuery.ajax({
        type: "GET",
        url: ajax_url,
        data: {
            action: 'article_loadmore',
            offset: offset,
            activeTab: activeTab,
        },
        beforeSend: function () {
            jQuery('.s-investment-articles-list-container.active .s-investment-articles-listing-btn').addClass('loading');
            jQuery('.s-investment-articles-list-container.active .s-investment-articles-listing-btn').html('<span></span><span></span><span></span>');
        },

        success: function (response) {
            var container = jQuery(".s-investment-articles-list-container.active .s-investment-cards-row");
            container.append(response);
            
            articleLoadMore();
        },
        error: function () {
            jQuery('.s-investment-articles-list-container.active .s-investment-cards-row').html('<p>There has been an error loading more articles.</p>');
        },

        complete: function () {
            jQuery('.s-investment-articles-list-container.active .s-investment-cards-row').removeClass('loading');
        }
    });
}

// function articleLoadMore() {
//     jQuery(document).ready(function (jQuery) {
//         jQuery('.s-investment-articles-list-container.active .s-investment-btn__view-more').on('click', function (e) {
//             e.preventDefault();
            
//             let button = jQuery(this);
//             let offset = button.data('offset') || 0;
//             console.log('Offset:', offset);
//             loadMore(offset, jQuery('.s-investment-articles-list-tab.active').data('tab'));
//         });
//     });
// }

// button selection
function articleLoadMore() {
    jQuery(document).ready(function (jQuery) {
        jQuery('.s-investment-btn__view-more').on('click', function (e) {
            e.preventDefault();
            let button = jQuery(this);
            let offset = button.data('offset') || 0;            
            var activeTab = button.parent().parent().attr('id');
            loadMore(offset, activeTab);
        });
    });
}
articleLoadMore();