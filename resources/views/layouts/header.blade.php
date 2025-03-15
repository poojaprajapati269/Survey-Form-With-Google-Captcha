<header class="navbar navbar-expand-lg navbar-dark" style="background-color: #0b774b;">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('survey.create') }}">
            <i class="fas fa-poll"></i> Survey Form
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Add Survey -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('survey.create') }}">
                        <i class="fas fa-plus-circle"></i> Add Survey
                    </a>
                </li>

                <!-- Survey List -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('survey.index') }}">
                        <i class="fas fa-list"></i> Survey List
                    </a>
                </li>

                <!-- Login -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                </li>

                <!-- Signup -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        <i class="fas fa-user-plus"></i> Signup
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>

