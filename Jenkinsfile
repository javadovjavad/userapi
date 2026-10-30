pipeline {
    agent {
        docker {
            image 'zricethezav/gitleaks'
            args '--entrypoint=""'
        }
    }
    stages {
        stage('Gitleaks') {
            steps {
                checkout scm
                sh 'gitleaks detect -v --source .'
            }
        }
    }
}
