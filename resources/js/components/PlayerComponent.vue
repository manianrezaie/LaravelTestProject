<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <div class="card card-team">
                    <div class="card-body">
                        <img v-bind:src="'/storage/images/players/thumb3-' + player.image" class="img img-thumbnail"/>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-8">
                <div class="card card-player">
                    <div class="card-body">
                        <h1 class="text-primary">
                            {{player.name}}
                        </h1>
                        <div class="attr">
                            <span class="text-primary">امتیاز: </span>
                            <span class="text-info">{{player.score}}</span>
                        </div>
                        <div class="attr">
                            <span class="text-primary">تاریخ تولد: </span>
                            <span class="text-info">{{player.birth_date}}</span>
                        </div>

                        <div class="line-header">
                            <span>تیم ها</span>
                        </div>
                        <div class="clearfix"></div>
                        <small-team-list-component v-if="teams.length>0" :t="[...teams]"></small-team-list-component>

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
                player: {},
                teams : []
            }
        },
        created() {
            let uri = '/api/player/' + this.id;
            this.axios.get(uri).then(response => {
                this.player = response.data.data;
                this.teams = this.player.teams;
            });
        },
        methods: {},
        computed: {
            // a computed getter

        }
    }
</script>