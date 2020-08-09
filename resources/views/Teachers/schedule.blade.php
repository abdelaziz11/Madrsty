 @extends('layouts.front-end')

@section('title')
Weekly Schedule
@endsection


@section('content')

  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="{{ asset('css/style2.css')  }}">


  <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
  <div class="cd-schedule cd-schedule--loading margin-top-lg margin-bottom-lg js-cd-schedule">

    <div class="cd-schedule__timeline">
      <ul>
        <li><span>06:00</span></li>
        <li><span>07:00</span></li>
        <li><span>08:00</span></li>
        <li><span>09:00</span></li>
        <li><span>10:00</span></li>
        <li><span>11:00</span></li>
        <li><span>12:00</span></li>
        <li><span>13:00</span></li>
        <li><span>14:00</span></li>
        <li><span>15:00</span></li>
        <li><span>16:00</span></li>
        <li><span>17:00</span></li>
        <li><span>18:00</span></li>
        <li><span>19:00</span></li>
        <li><span>20:00</span></li>
        <li><span>21:00</span></li>
        <li><span>22:00</span></li>
        <li><span>23:00</span></li>
      </ul>
    </div> <!-- .cd-schedule__timeline -->
  
    <div class="cd-schedule__events" onclick="" style="">
        
      <ul id="a">

        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Sunday</span></div>
  
          <ul id="Sunday">
            
            
          </ul>
        </li>
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Monday</span></div>
  
          <ul id="Monday">
  
          </ul>
        </li>
  
        <li class="cd-schedule__group" data-content="8">
          <div class="cd-schedule__top-info"><span>Tuesday</span></div>
  
          <ul id="Tuesday">
          </ul>
        </li>
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Wednesday</span></div>
  
          <ul id="Wednesday">
          </ul>
        </li>
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Thursday</span></div>
  
          <ul id="Thursday">
          </ul>
        </li>
      </ul>
    </div>
  
    <div class="cd-schedule-modal">
      <header class="cd-schedule-modal__header">
        <div class="cd-schedule-modal__content">
          <span class="cd-schedule-modal__date"></span>
          <h3 class="cd-schedule-modal__name"></h3>
        </div>
  
        <div class="cd-schedule-modal__header-bg"></div>
      </header>
  
      <div class="cd-schedule-modal__body">
        <div class="cd-schedule-modal__event-info"></div>
        <div class="cd-schedule-modal__body-bg"></div>
      </div>
  
      <a href="#0" class="cd-schedule-modal__close text-replace">Close</a>
    </div>
  
    <div class="cd-schedule__cover-layer"></div>
  </div> <!-- .cd-schedule -->


  <script>
    
    $.get(`/teacher/get_schedule`)
        .done(function(response) {
            console.log(response)
            response.forEach(element => {
                console.log(new Date(element.lecture_date).getHours())
                let d = new Date(element.lecture_date);
                
                let pm = d.getHours() >= 24;
                let hour = d.getHours() % 24;
                var end = (d.getHours() % 24) + 2;
                console.log("sdasd"+end)

                if (!hour) 
                  hour += 24;
                let minute = d.getMinutes();
                console.log(`${hour}:${minute}`);
                switch (element.day) {
                    case "Sunday":
                        $('#Sunday').append("<li data-id='"+element.id+"'  class='cd-schedule__event' data-content='1'><a data-start='"+hour+":"+minute+"' data-end='"+end+":"+minute+"' data-content='event-abs-circuit' data-event='event-1' href='#0'><em class='cd-schedule__name'>"+element.name+"</em></a></li>");
                        break;
                    case "Monday":
                        $('#Monday').append("<li data-id='"+element.id+"'  class='cd-schedule__event' data-content='1'><a data-start='"+hour+":"+minute+"' data-end='"+end+":"+minute+"' data-content='event-abs-circuit' data-event='event-1' href='#0'><em class='cd-schedule__name'>"+element.name+"</em></a></li>");
                        break;
                    case "Tuesday":
                        $('#Tuesday').append("<li data-id='"+element.id+"' class='cd-schedule__event' data-content='1'><a data-start='"+hour+":"+minute+"' data-end='"+end+":"+minute+"' data-content='event-abs-circuit' data-event='event-1' href='#0'><em class='cd-schedule__name'>"+element.name+"</em></a></li>");
                        break;
                    case "Wednesday":
                        $('#Wednesday').append("<li data-id='"+element.id+"' class='cd-schedule__event' data-content='1'><a data-start='"+hour+":"+minute+"' data-end='"+end+":"+minute+"' data-content='event-abs-circuit' data-event='event-1' href='#0'><em class='cd-schedule__name'>"+element.name+"</em></a></li>");
                        break;
                    case "Thursday":
                        $('#Thursday').append("<li data-id='"+element.id+"' class='cd-schedule__event' data-content='1'><a data-start='"+hour+":"+minute+"' data-end='"+end+":"+minute+"' data-content='event-abs-circuit' data-event='event-1' href='#0'><em class='cd-schedule__name'>"+element.name+"</em></a></li>");
                        break;
                }
            });
            console.log("in mine")
            loadScript('/js/util.js')
                loadScript('/js/main copy.js')
        })
        .fail(function(erro) {
            console.log('Failed to fetch the Access Token with error: ' + erro);
        });
        function loadScript(src) {
            let script = document.createElement('script');
            script.src = src;
            script.async = false;
            document.body.append(script);
        }

        $('#a').on('click','li ul li',function() {

  

          console.log($(this).attr('data-id') )

          $.ajax({
      url: "/teacher/joinMeeting",
      type: "POST",
      data: {"_token": $('#token').val(),"id":$(this).attr('data-id') },
      success: function (response) {
           console.log(response);
          window.location.replace(response)
          
           
         },
         error: function (response) {
           console.log(response);
         }
  });


        });

</script>



{{-- <script src="{{ asset('js/util.js') }} "></script> <!-- util functions included in the CodyHouse framework -->
<script src="{{ asset('js/main copy.js') }}"></script>
 --}}


@endsection