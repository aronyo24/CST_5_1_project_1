$(document).ready(function () {
  $(".video-icon").magnificPopup({
    items: {
      src: "https://www.youtube.com/watch?v=zmgfqp7-Z_Q&autoplay=1", // Adjusted URL to a valid YouTube URL
      type: "iframe", // this overrides default type
    },
    gallery: {
      enabled: false,
    },
    type: "iframe", // this is default type
  });
});
