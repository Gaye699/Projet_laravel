<div id="page-header" class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-plus-circle2 mr-2"></i> <span class="font-weight-semibold">@yield('page_title')</span></h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="d-flex justify-content-center">
                {{-- 
                Remarque: les liens suivants sont commentés et peuvent être activés si nécessaire.
                <a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistiques</span></a>
                <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Factures</span></a>
                <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Calendrier</span></a>
                --}}
                <a href="{{ Qs::userIsSuperAdmin() ? route('settings') : '' }}" class="btn btn-link btn-float text-default">
                    <i class="icon-arrow-down7 text-primary"></i> 
                    <span class="font-weight-semibold">Session Actuelle: {{ Qs::getSetting('current_session') }}</span>
                </a>
            </div>
        </div>
    </div>

    {{--Fil d'Ariane--}}
    {{--
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Accueil</a>
                <a href="form_select2.html" class="breadcrumb-item">Formulaires</a>
                <span class="breadcrumb-item active">Sélections Select2</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
                <a href="#" class="breadcrumb-elements-item">
                    <i class="icon-comment-discussion mr-2"></i>
                    Support
                </a>

                <div class="breadcrumb-elements-item dropdown p-0">
                    <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-gear mr-2"></i>
                        Paramètres
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Sécurité du compte</a>
                        <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analyses</a>
                        <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibilité</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="icon-gear"></i> Tous les paramètres</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    --}}
</div>
