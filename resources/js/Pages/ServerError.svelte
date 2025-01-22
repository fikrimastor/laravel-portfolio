<script>
  let { status, message } = $props()

  const titles = {
    503: '503: Service Unavailable',
    500: '500: Server Error',
    404: '404: Page Not Found',
    403: '403: Forbidden',
  }

  const descriptions = {
    503: 'Sorry, we are doing some maintenance. Please check back soon.',
    500: 'Whoops, something went wrong on our servers.',
    404: 'Sorry, the page you are looking for could not be found.',
    403: 'Sorry, you are forbidden from accessing this page.',
  }
</script>

<div>
  <h1>{titles[status]}</h1>
  <div>{message ?? descriptions[status]}</div>
</div>