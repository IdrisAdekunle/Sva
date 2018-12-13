
<p class="app-notification__user"> {{$notification->data['create']['name']}}  created new user  </p>


<p class="app-notification__meta"> {{ \Carbon\Carbon::createFromTimestamp(strtotime($notification->data['user']['created_at']))->diffForHumans() }}</p>


