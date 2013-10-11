<ul class="nav nav-tabs" id="myTab">
  <li class="active"><a href="#home">Home</a></li>
  <li><a href="#profile">Profile</a></li>
  <li><a href="#messages">Messages</a></li>
  <li><a href="#settings">Settings</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home">...</div>
  <div class="tab-pane" id="profile">...</div>
  <div class="tab-pane" id="messages">...</div>
  <div class="tab-pane" id="settings">...</div>
</div>

<script>
  $(function () {
    $('#myTab').tab();
  });
</script>