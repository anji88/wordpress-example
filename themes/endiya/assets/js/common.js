
var date = '_25';
var ga_dump = {

    // @TODO: This is dynamic 
    "landing-page-version1-get-answers-button": {
        type: 'send',
        event: 'Search (Get Answers)',
        category: 'WWW Experiment',
        action: 'click',
        label: (value) => `WWW_HomepageInteractiveHeroTabbedSearch_2019_02_25|var1|Learn_${value}`,
        interaction: true
    },
    "version1-inputfield": {
        type: 'send',
        event: 'Search',
        category: 'WWW Experiment',
        action: 'include',
        label: `WWW_HomepageInteractiveHeroTabbedSearch_2019_02${date}|var1`,
        interaction: false
    },

    "helpdesk-lanch-button": {
        type: 'send',
        event: 'Help Desk Launch',
        category: 'WWW Experiment',
        action: 'click',
        label: `WWW_HomepageInteractiveHeroCategories_2019_02${date}|var1|HelpDeskLaunch`,
        interaction: false
    },

    "helpdesk-learn-more-button": {
        type: 'send',
        event: 'Help Desk Learn more',
        category: 'WWW Experiment',
        action: 'click',
        label: `WWW_HomepageInteractiveHeroCategories_2019_02${date}|var1|HelpDeskLearn`,
        interaction: false
    },

    "manage-inventory-button": {
        type: 'send',
        event: 'Inventory Launch',
        category: 'WWW Experiment',
        action: 'click',
        label: `WWW_HomepageInteractiveHeroCategories_2019_02${date}|var1|InventoryLaunch`,
        interaction: false
    },

    "manage-inventory-learn-more-button": {
        type: 'send',
        event: 'Inventory Learn more',
        category: 'WWW Experiment',
        action: 'click',
        label: `WWW_HomepageInteractiveHeroCategories_2019_02${date}|var1|InventoryLearn`,
        interaction: false
    },

    "find-it-tools-button": {
        type: 'send',
        event: 'Find the tools',
        category: 'WWW Experiment',
        action: 'click',
        label: `WWW_HomepageInteractiveHeroCategories_2019_02${date}|var1|find the tools`,
        interaction: false
    },

    "press-read-more-button": {
        type: 'send',
        event: 'Press',
        category: 'WWW Experiment',
        action: 'click',
        label: `WWW_HomepageInteractiveHeroCategories_2019_02${date}|var1|press`,
        interaction: false
    },

    "mobile-press-read-more-button": {
        type: 'send',
        event: 'Press',
        category: 'WWW Experiment',
        action: 'click',
        label: `WWW_HomepageInteractiveHeroCategories_2019_02${date}|var1|press`,
        interaction: false
    },

    "tech-insights-more-button": {
        type: 'send',
        event: 'Tech insights',
        category: 'WWW Experiment',
        action: 'click',
        label: `WWW_HomepageInteractiveHeroCategories_2019_02${date}|var1|tech insights`,
        interaction: false
    },

    "tech-vendors-version1": {
        type: 'send',
        event: 'Learn More about our solutions for Tech Vendors',
        category: 'WWW Experiment',
        action: 'click',
        label: `WWW_HomepageInteractiveHeroTabbedSearch_2019_02${date}|var1|TechVendors`,
        interaction: false
    },
    "tech-insights-read-it-research-button-for-landing1": {
        type: 'send',
        event: 'Tech Insights - Read IT Research',
        category: 'WWW Experiment',
        action: 'click',
        label: `WWW_HomepageInteractiveHeroTabbedSearch_2019_02${date}|var1|Research`,
        interaction: false
    },
    // tabs seach page experiments end


    //seach page version2 experiments start
    "version2-inputfield": {
        type: 'send',
        event: 'Search (Get Answers)',
        category: 'WWW Experiment',
        action: 'include',
        label: `WWW_HomepageInteractiveHeroSearchbox_2019_02${date}|var1`,
        interaction: false
    },
    //@TODO : This is dynamic
    "landing-page-verstion2-get-answers-button": {
        type: 'send',
        event: 'Search (Get Answers)',
        category: 'WWW Experiment',
        action: 'click',
        label: value => `WWW_HomepageInteractiveHeroSearchbox_2019_02${date}|var1|${value}`,
        interaction: true
    },
    "tech-vendors-version2": {
        type: 'send',
        event: 'Learn More about our solutions for Tech Vendors',
        category: 'WWW Experiment',
        action: 'click',
        label: `WWW_HomepageInteractiveHeroSearchbox_2019_02${date}|var1|TechVendors`,
        interaction: false
    },
    "tech-insights-read-it-research-button-landing2": {
        type: 'send',
        event: 'Tech Insights - Read IT Research',
        category: 'WWW Experiment',
        action: 'click',
        label: `WWW_HomepageInteractiveHeroSearchbox_2019_02${date}|var1|Research`,
        interaction: false
    },
    //seach page version2 experiments end

    //seach page version3 experiments start
    "security": {
        type: 'send',
        event: 'Security',
        category: 'WWW Experiment',
        action: 'click',
        label: `WWW_HomepageInteractiveHeroCategories_2019_02${date}|var1|Security`,
        interaction: false
    },
    "database": {
        type: 'send',
        event: 'Databases',
        category: 'WWW Experiment',
        action: 'click',
        label: `WWW_HomepageInteractiveHeroCategories_2019_02${date}|var1|Databases`,
        interaction: false
    },
    "networking": {
        type: 'send',
        event: 'Networking',
        category: 'WWW Experiment',
        action: 'click',
        label: `WWW_HomepageInteractiveHeroCategories_2019_02${date}|var1|Networking`,
        interaction: false
    },
    "storage-backup": {
        type: 'send',
        event: 'eveStorage & Backupnt',
        category: 'WWW Experiment',
        action: 'click',
        label: `WWW_HomepageInteractiveHeroCategories_2019_02${date}|var1|Storage`,
        interaction: false
    },
    "virtualization": {
        type: 'send',
        event: 'Virtualization',
        category: 'WWW Experiment',
        action: 'click',
        label: `WWW_HomepageInteractiveHeroCategories_2019_02${date}|var1|Virtualization`,
        interaction: false
    },
    "more": {
        type: 'send',
        event: 'More',
        category: 'WWW Experiment',
        action: 'click',
        label: `WWW_HomepageInteractiveHeroCategories_2019_02${date}|var1|More`,
        interaction: false
    },
    "tech-vendors": {
        type: 'send',
        event: 'Learn More about our solutions for Tech Vendors',
        category: 'WWW Experiment',
        action: 'click',
        label: `WWW_HomepageInteractiveHeroCategories_2019_02${date}|var1|TechVendors`,
        interaction: false
    },
    "tech-insights-read-it-research-button": {
        type: 'send',
        event: 'Tech Insights - Read IT Research',
        category: 'WWW Experiment',
        action: 'click',
        label: `WWW_HomepageInteractiveHeroCategories_2019_02${date}|var1|Research`,
        interaction: false
    }
};

function googleAnalyticsTriggering() {
    //seach page version3 experiments start
    $(document).on('click', '[x-ga-name]', function (e) {
        e.preventDefault();
        var $self = $(this);
        var gaTag = $self.attr('x-ga-name');

        var gaValues = ga_dump[gaTag];

        // Other properties to append
        ["x-ga-redirect-to", "x-ga-self"]
            .forEach(f => gaValues[f] = $self.attr(f))

        sendGA(gaValues)
    });

};
function sendGA(gaValues) {
    // var label = "";
    // if (typeof gaValues.label === "function") {
    //     label = gaValues.label(...gaValues.labelValues);
    // }
    // else {
    //     label = gaValues.label;
    // }
    // Google analytics
    var isRedirectSelf = gaValues['x-ga-self'] === "false" ? false : true;
    var redirectTo = gaValues['x-ga-redirect-to'];
    if (redirectTo && redirectTo.startsWith("https://community.spiceworks.com")){
        isRedirectSelf = true;
    }
    if (!isRedirectSelf && redirectTo) {
        redirectToLink(redirectTo);
    }

    (function () {
        if (gaValues.callback) {
            gaValues.callback();
        }
        else if (redirectTo && isRedirectSelf) {
            redirectToLink(redirectTo);
        }
    })();

    /**google analytics code */
    // ga(gaValues.type, {
    //     hitType: gaValues.event,
    //     eventCategory: gaValues.category,
    //     eventAction: gaValues.action,
    //     eventLabel: label,
    //     hitCallback: createFunctionWithTimeout(() => {
    //         if (gaValues.callback) {
    //             gaValues.callback();
    //         }
    //         else if (redirectTo && isRedirectSelf) {
    //             redirectToLink(redirectTo);
    //         }
    //     }, gaValues.cbTimeout)
    // });

    // ga(gaValues.type, gaValues.event, gaValues.category, gaValues.action, label, {
    //     hitCallback: createFunctionWithTimeout(() => {
    //         if (gaValues.callback) {
    //             gaValues.callback();
    //         }
    //         else if (redirectTo && isRedirectSelf) {
    //             redirectToLink(redirectTo);
    //         }
    //     }, gaValues.cbTimeout)
    // })


    // Google tag manager
    // gtag('event', gaValues.action, {
    //     'event_category': gaValues.category,
    //     'event_label': label,
    //     'value': gaValues.event,
    //     'event_callback': createFunctionWithTimeout(() => {
    //         if(gaValues.callback){
    //             gaValues.callback();
    //         }
    //         else if(redirectTo && isRedirectSelf){
    //             redirectToLink(redirectTo)
    //         }
    //     }, gaValues.cbTimeout)
    // });
}

function redirectToLink(link, _self) {
    var a = document.createElement('a');
    a.href = link;
    a.target = _self ? "_self" : "_blank";
    a.click();
}

function createFunctionWithTimeout(callback, opt_timeout) {
    var called = false;
    function fn() {
        if (!called) {
            called = true;
            callback();
        }
    }
    setTimeout(fn, opt_timeout || 1000);
    return fn;
}

googleAnalyticsTriggering();