<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-xl-4">
                <div class="card card-team">
                    <div class="card-body">
                        <img v-bind:src="'/storage/images/teams/thumb3-' + team.image" class="img  img-thumbnail"/>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-xl-8">
                <div class="card card-player">
                    <div class="card-body">
                        <h1 class="text-primary">
                            {{team.name}}
                        </h1>

                        <div class="attr">
                            <span class="text-primary">تعداد بازیکن: </span>
                            <span class="text-info">{{team.players.length}}</span>
                        </div>


                        <div class="line-header">
                            <span>بازیکن ها</span>
                        </div>
                        <div class="clearfix"></div>
                        <small-player-list-component v-if="players.length>0" :t="[...players]"></small-player-list-component>

                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        props: ['id'],
        data() {
            return {
                team: {},
                players : []
            }
        },
        created() {
            let uri = '/api/team/' + this.id;
            this.axios.get(uri).then(response => {
                this.team = response.data.data;
                this.players = this.team.players;
            });
        },
        methods: {

        },
        computed: {
            // a computed getter

        }
    }
</script>