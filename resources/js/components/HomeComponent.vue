<template>
    <div>
        <div class="container home">
            <div class="line-header">
                <span>آخرین بازیکن ها</span>
            </div>
            <div class="clearfix"></div>
            <players-component count-player="6"></players-component>
            <div class="more_link">
                <router-link :to="{name:'listAllPlayers'}">
                    <span class="btn btn-primary">
                        <i class="fa fa-user"></i>
                        لیست همه تیم ها</span>
                </router-link>
            </div>
            <div class="line-header">
                <span>آخرین تیم ها</span>
            </div>
            <div class="clearfix"></div>
            <teams-component count-team="6"></teams-component>
            <div class="more_link">
                <router-link :to="{name:'listAllTeams'}">
                    <span class="btn btn-primary">
                        <i class="fa fa-users"></i>
                        لیست همه تیم ها</span>
                </router-link>

            </div>
        </div>
    </div>
</template>