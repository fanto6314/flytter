<form method="post" action="{{ route('testSession') }}">
		@csrf
        <input type="submit" name="submit">
	</form>