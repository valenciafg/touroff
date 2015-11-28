<?php
/*
 * Template Name: Ejemplo Place Page
 * Description: Plantilla de pagina personalizada SAGE con Angular
 */
?>

<div class="place-app-wrap" ng-app="placeApp" >
    <div class="place-app" ng-controller="placeAppController">
        {{hello}}
        <div ui-view></div>
    </div>
    <div class="place-appxx" ng-controller="placeAppPlacesController">
        <ul>
            <li ng-repeat="post in posts">
                <a href="{{post.ID}}">
                    {{post.title}}
                </a>
            </li>
        </ul>
    </div>
</div>

<?php
echo date('2015');
?>