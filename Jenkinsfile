pipeline {
    agent any

    stages {
        stage('Gitleaks') {
            steps {
               docker.image('zricethezav/gitleaks').inside('--entrypoint=""') {
               sh "git clone https://github.com/${repo}.git && cd userapi/ && gitleaks detect -v"
               }
            }
        }
    }
}





