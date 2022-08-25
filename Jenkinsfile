pipeline {
    agent any

    stages {
        stage('Gitleaks') {
            steps {
               echo "Running ${env.BUILD_ID} on ${env.JENKINS_URL}"
            }
            steps {
               docker.image('zricethezav/gitleaks').inside('--entrypoint=""') {
               sh "git clone https://github.com/${repo}.git && cd userapi/ && gitleaks detect -v"
               }
            }
        }
    }
}





