//Load Google Analytics Page Scrolling Events on Window Load
$( document ).ready(function() {          
    //Content and Page Read Variables
    //Turns true when the viewport reaches the end of the content or document
    var ReadStart = false;
    var ContentRead = false;
    var PageRead = false;

    //Determing the amount of time the user spent reading and scrolling through the article
    var ReadTime = 0;
    var StartReadTime = 0;
    var FinishReadTime = 0;

    //Check the page title
    var PageTitle = document.title;
    ga('send', 'event', 'Reading', 'Article Load', PageTitle, 0, true);

    console.log(PageTitle);

    setInterval(function(FinishedReading)
    {
        //Set Page Variables
        var WindowBottom = $( window ).height() + $( window ).scrollTop(); //Check the height of the window and the distance to top beyond viewport
        var DocumentBottom = $( document ).height(); // Check the total height of the document
        var ContentBottom = $('#OV-PostBody').offset().top + $('#OV-PostBody').innerHeight(); //Check the distance to the top of the document from the content and the height of the content

        if( $( window ).scrollTop() > 0 && !ReadStart)
        {
            StartReadTime = ReadTime;
            ReadStart = true;
            console.log('Started Reading at '+StartReadTime+' Seconds');
            ga('send', 'event', 'Reading', 'Time Before Reading', PageTitle, StartReadTime);
        }

        //Check if the Window Has Reached the Bottom of the Content
        if( WindowBottom >= ContentBottom && !ContentRead)
        {
            FinishReadTime = ReadTime - StartReadTime;
            console.log('Finshed Reading Content. Total Time Spent Reading Content: '+FinishReadTime+' Seconds');
            ga('send', 'event', 'Reading', 'Article Read', PageTitle, 0, true);
            ga('send', 'event', 'Reading', 'Time Read', PageTitle, FinishReadTime, true);
            ContentRead = true;
        }

        //Check if the window has Reached the Bottom of the Page
        if( WindowBottom >= DocumentBottom && !PageRead)
        {
            console.log('Finished Reading Page');
            ga('send', 'event', 'Reading', 'Page Read', PageTitle, 0, true);
            PageRead = true;
        }

    }, 100);

    //Count the time read until page is comepletely read
    setInterval(function(AddTime)
    {
        if( !ContentRead || !PageRead)
        {
            ReadTime += 1;
            console.log('Total Time Spend Reading '+ReadTime);
        }
    }, 1000);

});